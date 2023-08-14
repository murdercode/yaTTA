<?php

namespace App\Providers;

use App\Models\ApiKey;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // TODO: Temp rewrite of config/openai.php
        if (Schema::hasTable('api_keys')) {
            config([
                'openai' => [
                    'api_key' => ApiKey::whereActive()->first()->key ?? null,
                ],
            ]);
        }
    }
}
