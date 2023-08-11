<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Component;

class ChatUi extends Component
{
    public Chat $chat;

    public function mount(int $chatId): void
    {
        $chat = Chat::find($chatId);
        $this->chat = $chat;
    }

    public function placeholder(): string
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
