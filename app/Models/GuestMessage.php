<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestMessage extends Model
{
    use HasFactory;

    public function Owner()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_ref');
    }

    public function Reply()
    {
        return $this->hasOne('App\Models\MessageReply', 'message_ref', 'id');
    }
}
