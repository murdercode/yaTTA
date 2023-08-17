<?php

namespace App\Providers;

use App\Models\ApiKey;
use Illuminate\Support\Facades\Schema;

class OpenAiServiceProvider
{

    public function __invoke()
    {
        if (!app()->environment('testing') && Schema::hasTable('api_keys')) {
            config([
                'openai' => [
                    'api_key' => ApiKey::whereActive()->first()->key ?? null,
                ],
            ]);
        }
    }

}
