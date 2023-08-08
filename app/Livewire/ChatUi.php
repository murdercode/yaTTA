<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatUi extends Component
{
    public Chat $chat;

    public function mount(?int $chatId = 1)
    {
        $chat = Chat::find($chatId);

        $this->chat = $chat;
    }

    /**
     * Listen for the event fired by the chat list component.
     *
     * @param  int  $chatId
     */
    #[On('chat-selected')]
    public function setChat(Chat $chat): void
    {
        $this->chat = $chat;
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            WAITING
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.chat-ui');
    }
}
