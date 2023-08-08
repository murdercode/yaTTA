<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Livewire\Attributes\Reactive;
use Livewire\Component;
use Native\Laravel\Dialog;

class ChatInput extends Component
{
    #[Reactive]
    public string $input;
    public Chat $chat;


    public function save(): void
    {
        $message = $this->chat->sendMessage($this->input);
        $this->input = '';
        $this->dispatch('message-sent', $message->id)->to('chat.chat-messages');
    }

    public function render()
    {
        return view('livewire.chat.chat-input');
    }
}
