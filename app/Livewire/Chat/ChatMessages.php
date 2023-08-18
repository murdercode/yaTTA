<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatMessages extends Component
{
    public Chat $chat;
    public Collection $messages;
    public ?Message $lastMessage = null;

    public function mount($chat)
    {
        $this->chat = $chat;
        $this->messages = $chat->messages->sortByDesc('id');
    }

    /**
     * Method for adding a new message to the chat.
     *
     * @return void
     */
    public function addToChatUi(Message $message)
    {
        $this->messages->prepend($message);
    }

    /**
     * Listening when a new message is saved.
     *
     * @return void
     */
    #[On('input-saved')]
    public function refreshMessagesByInput()
    {
        $this->lastMessage = $this->chat->messages->last();
        $this->addToChatUi($this->lastMessage);

        $this->dispatch('message-refreshed-by-input')->self();
    }

    #[On('message-refreshed-by-input')]
    public function getAiResponse()
    {
        // Create temp answer to show the user that the AI is typing
        $tempMessage = new Message();
        $tempMessage->body = '';
        $tempMessage->chat_id = $this->chat->id;
        $tempMessage->save();

        $this->addToChatUi($tempMessage);

        $this->dispatch('chat-complete', $this->chat->id);
    }

    public function render()
    {
        return view('livewire.chat.chat-messages');
    }
}
