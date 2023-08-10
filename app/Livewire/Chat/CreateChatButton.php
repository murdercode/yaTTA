<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Livewire\Component;

class CreateChatButton extends Component
{
    /**
     * Create a chat when the user clicks the button.
     */
    public function createChat()
    {
        $chat = Chat::create();

        return redirect()->route('chat.show', $chat);
    }

    public function render()
    {
        return view('livewire.chat.create-chat-button');
    }
}
