<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ChatInput extends Component
{
    #[Reactive]
    public string $input;

    public Chat $chat;

    public function save(): void
    {
        $this->chat->messages()->create([
            'body' => $this->input,
            'in_out' => 'out',
        ]);

        $this->input = '';

        $this->dispatch('input-saved');
    }

    public function render()
    {
        return view('livewire.chat.chat-input');
    }
}
