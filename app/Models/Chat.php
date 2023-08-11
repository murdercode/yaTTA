<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    /**
     * Send a message to the chat.
     */
    public function sendMessage($message): Message
    {
        return $this->messages()->create([
            'body' => $message,
            'in_out' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'chat_id' => $this->id,
        ]);
    }

    public function messages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Message::class);
    }
}
