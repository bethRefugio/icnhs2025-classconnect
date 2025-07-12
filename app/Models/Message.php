<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'conversation_id',
        'user_id',
        'receiver_id',
        'content',
        'type',
        'read_at',
    ];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}