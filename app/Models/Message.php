<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    public $fillable = [
        'body',
        'in_out',
    ];

    /**
     * Return true if the message is from the user.
     */
    public function getFromUserAttribute(): bool
    {
        return $this->in_out == true;
    }

    /**
     * Return true if the message is from the AI.
     */
    public function getFromAiAttribute(): bool
    {
        return ! $this->from_user;
    }

    /**
     * Return the chat that the message belongs to.
     */
    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }
}
