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

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
