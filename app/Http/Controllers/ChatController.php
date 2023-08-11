<?php

namespace App\Http\Controllers;

use App\Models\Chat;

class ChatController extends Controller
{
    public function show($id)
    {
        $chat = Chat::findOrFail($id);

        // Update last access time
        $chat->updated_at = now();
        $chat->save();

        return view('chat.show', compact('chat'));
    }
}
