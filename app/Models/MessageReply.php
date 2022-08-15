<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageReply extends Model
{
    use HasFactory;

    public function Owner()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_ref');
    }
}
