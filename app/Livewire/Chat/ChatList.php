<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatList extends Component
{
    public Collection $chats;

    public function boot(): void
    {
        $this->chats = Chat::all()->sortByDesc('updated_at');
    }

    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
