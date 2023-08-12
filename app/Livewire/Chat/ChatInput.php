<?php

namespace App\Livewire\Chat;

use App\Livewire\Forms\ChatForm;
use App\Models\Chat;
use Livewire\Component;

class ChatInput extends Component
{
    public ChatForm $form;

    public Chat $chat;

    public string $autocomplete = '';

    public function updatingFormInput()
    {
        $this->autocomplete = strlen($this->form->input) >= 3 ? $this->form->input.rand(1, 1000) : '';
    }

    /**
     * Run when user submit the input field.
     */
    public function save()
    {

        // Save the chat
        $this->chat->addInput($this->form->input);

        // Reset the form
        $this->form->reset();

        $this->dispatch('input-saved')->to('chat.chat-messages');

    }

    public function render()
    {
        return view('livewire.chat.chat-input');
    }
}
