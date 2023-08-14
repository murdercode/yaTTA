<?php

namespace App\Livewire\Settings;

use App\Enums\ApiKeyTypeEnum;
use App\Livewire\Forms\CreateApiKeyForm;
use App\Models\ApiKey;
use Illuminate\Support\Collection;
use Livewire\Component;

class AddApiKey extends Component
{
    public CreateApiKeyForm $form;

    public Collection $apiKeyTypes;

    public function mount()
    {
        $this->apiKeyTypes = collect(ApiKeyTypeEnum::values());
    }

    public function save()
    {

        ApiKey::create($this->form->toArray());

        $this->form->reset();

        $this->dispatch('api-key-added');
    }

    public function render()
    {
        return view('livewire.settings.add-api-key');
    }
}
