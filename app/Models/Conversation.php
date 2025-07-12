<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'is_group',
    ];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}