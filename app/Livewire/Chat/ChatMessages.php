<?php

namespace App\Livewire\Chat;

use Livewire\Component;

class ChatMessages extends Component
{
    public $messages;

    public function render()
    {
        return view('livewire.chat.chat-messages');
    }
}
