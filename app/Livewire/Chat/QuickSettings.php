<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Livewire\Component;

class QuickSettings extends Component
{
    public function deleteAllChats()
    {
        Chat::truncate();

        return redirect()->route('welcome');
    }

    public function render()
    {
        return view('livewire.chat.quick-settings');
    }
}
