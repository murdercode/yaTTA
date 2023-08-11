<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $fillable = [
        'body',
        'in_out',
    ];

    public function getFromUserAttribute()
    {
        return $this->in_out == true;
    }

    public function getFromAiAttribute()
    {
        return ! $this->from_user;
    }

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
