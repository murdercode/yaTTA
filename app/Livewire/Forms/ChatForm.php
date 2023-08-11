<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ChatForm extends Form
{
    #[Rule('required|min:3')]
    public string $input = '';
}
