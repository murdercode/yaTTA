<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Illuminate\Support\Collection;
use Livewire\Component;

class ChatList extends Component
{
    public Collection $chats;

    public int $activeChatId;

    public function boot(): void
    {
        $this->chats = Chat::all()->sortByDesc('id');
    }

    /**
     * This method is called when a chat is selected by clicking on an item in the list.
     *
     * @param $chatId
     */
    public function setChat(array $chat): void
    {
        $this->activeChatId = $chat['id'];
        $this->dispatch('chat-selected', chat: $chat);
    }

    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
