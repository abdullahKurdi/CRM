<?php

namespace App\Http\Livewire\Public;

use App\Events\Conversations\ConversationUpdated;
use App\Events\Conversations\MessageAdded;
use App\Models\Conversation;
//use App\Notifications\Conversation\MessageAddedNotification;
use App\Notifications\Conversations\MessageAddedNotification;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConversationReply extends Component
{
    use WithFileUploads;

    public $body = '';
    public $attachment = '';
    public $attachment_name = '';
    public $conversation;


    public function mount(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }

    protected $rules = [
        'body'=>'required',
        'attachment'=>'nullable|file|mimes:png,jpg,jpeg,gif,wav,mp3,mp4|max:102400'
    ];

    public function reply()
    {
        $this->validate();

        if ($this->attachment != ""){
            $this->attachment_name = md5($this->attachment . microtime()) . '.' . $this->attachment->extension();
            // function from laravel file
            // media we build new driver in file system with name media
            $this->attachment->storeAs('/' ,$this->attachment_name , 'media');
            $data['attachment']= $this->attachment_name;
        }

        $data['body'] = $this->body;
        $data['user_id'] = auth()->id();


        //create message in conversation relation
        $message = $this->conversation->messages()->create($data);
        //update last message in conversation table
        $this->conversation->update(['last_message_at' => now()]);


        //update read at for users pivot table
        foreach ($this->conversation->others as $user){
            $user->conversations()->updateExistingPivot($this->conversation,['read_at'=>null]);
            $user->notify(new MessageAddedNotification($message));
        }



        // toOthers built in broadcast its mean for all users login in system else you
        broadcast(new MessageAdded($message))->toOthers();
        broadcast(new ConversationUpdated($message->conversation));

        // for use in other livewire component
        $this->emit('message.created', $message->id);

        $this->body = '';
        $this->attachment = '';
        $this->attachment_name = '';


    }



    public function render()
    {
        return view('livewire.public.conversation-reply');
    }
}
