<?php

namespace App\Providers;

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
        if (!app()->environment('testing') && Schema::hasTable('api_keys')) {
            config([
                'openai' => [
                    'api_key' => \App\Models\ApiKey::whereActive()->first()->key ?? null,
                ],
            ]);
        }
    }
}
