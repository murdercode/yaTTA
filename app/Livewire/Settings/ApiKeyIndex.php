<?php

namespace App\Livewire\Settings;

use App\Models\ApiKey;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class ApiKeyIndex extends Component
{
    public Collection $apiKeys;

    public function mount()
    {
        $this->apiKeys = ApiKey::all()->sortByDesc('created_at');
    }

    public function delete(int $id)
    {
        ApiKey::find($id)->delete();
        $this->refreshApiKeys();
    }

    #[On('api-key-added')]
    public function refreshApiKeys()
    {
        $this->apiKeys = ApiKey::all();
    }

    public function render()
    {
        return view('livewire.settings.api-key-index');
    }
}
