<?php

namespace App\Http\Livewire\Public;

use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationMessageOwn extends Component
{
    public $message;

    public function mount($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.public.conversation-message-own');
    }
}
