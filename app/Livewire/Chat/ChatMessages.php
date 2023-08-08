<?php

namespace App\Livewire\Chat;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ChatMessages extends Component
{
    #[Reactive]
    public $messages;

    public function render()
    {
        return view('livewire.chat.chat-messages');
    }
}
