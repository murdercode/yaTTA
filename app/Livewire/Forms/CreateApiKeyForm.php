<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class CreateApiKeyForm extends Form
{
    #[Rule('required|min:3')]
    public string $name = '';

    #[Rule('required|unique:api_keys,key')]
    public string $key = '';

    #[Rule('required')]
    public string $type = 'openai';
}
