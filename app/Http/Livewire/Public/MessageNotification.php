<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class MessageNotification extends Component
{
    public $conversationNotfyCount ="";
    public $conversationNotfy = "";

    public function getListeners(): array
    {
        $user_id = auth()->id();

        return [
            "echo-notification:App.Models.User.{$user_id},notification"=>"mount"
        ];
    }

    public function mount()
    {
        $this->conversationNotfyCount = auth()->user()->unreadNotifications()->count();
        $this->conversationNotfy = auth()->user()->unreadNotifications;
    }

    public function markAsRead($id)
    {
        $notification = auth()->user()->unreadNotifications()->where('id',$id)->first();
        $notification->markAsRead();
        return redirect()->to($notification->data['route_url']);
    }

    public function render()
    {
        return view('livewire.public.message-notification');
    }
}
