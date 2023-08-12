<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;

class SettingsController extends Controller
{
    public function show()
    {
        $apiKeys = ApiKey::all();

        return view('settings', compact('apiKeys'));
    }
}
