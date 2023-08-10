<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;

class Baloon extends Component
{
    public Message $message;

    public function render()
    {
        return view('livewire.chat.baloon');
    }
}
