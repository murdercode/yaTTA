<?php

namespace App\Http\Controllers;

use App\Models\Chat;

class ChatController extends Controller
{
    public function show($id)
    {
        $chat = Chat::findOrFail($id);

        return view('chat.show', compact('chat'));
    }
}
