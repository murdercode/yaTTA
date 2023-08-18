<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class ApiKeySetMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = ApiKey::whereActive()->first() ?? null;

        // override the config value in config/openai.php
        if (Schema::hasTable('api_keys') && $apiKey) {
            config(['openai.api_key' => $apiKey->key]);
        }

        return $next($request);
    }
}
