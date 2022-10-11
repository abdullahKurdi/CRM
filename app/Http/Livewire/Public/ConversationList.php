<?php

namespace App\Http\Livewire\Public;

use App\Models\Conversation;
use Illuminate\Support\Collection;
use Livewire\Component;


class ConversationList extends Component
{

    public $conversations;


    public function getListeners()
    {
        $user = auth()->id();
        return [
            'echo-private:App.Models.User.' . auth()->id() . ',Conversations\\ConversationCreated' => 'createConversationFromBroadcast',
            "echo-private:App.Models.User.{$user},Conversations\\ConversationUpdated" => "updateConversationFromBroadcast"
        ];
    }

    public function createConversationFromBroadcast($payload)
    {
        return $this->conversations->prepend(Conversation::find($payload['conversation']['id']));
    }


    public function updateConversationFromBroadcast($payload)
    {

        if (!$this->conversations->contains($payload['conversation']['id'])){
            $this->conversations->prepend(Conversation::find($payload['conversation']['id']));
        } else {
            $this->conversations->find($payload['conversation']['id'])->fresh();
        }

    }

    public function mount(Collection $conversations)
    {
        $this->conversations = $conversations->reverse();
    }

    public function render()
    {
        return view('livewire.public.conversation-list');
    }
}
