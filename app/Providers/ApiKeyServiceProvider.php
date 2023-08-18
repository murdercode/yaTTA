<?php

namespace App\Providers;

use App\Models\ApiKey;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ApiKeyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $apiKey = ApiKey::whereActive()->first() ?? null;

        // override the config value in config/openai.php
        if (Schema::hasTable('api_keys') && $apiKey) {
            config(['openai.api_key' => $apiKey->key]);
        }

    }
}
