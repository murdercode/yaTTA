<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ChatMessages extends Component
{
    public $messages;

    #[On('message-sent')]
    public function addMessageInChat($messageId)
    {
        $message = Message::find($messageId);
        $this->messages->push($message);
    }


    public function render()
    {
        return view('livewire.chat.chat-messages');
    }
}
