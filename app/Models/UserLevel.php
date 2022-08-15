<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    use HasFactory;

    public function Level(){
        return $this->hasOne('App\Models\Level', 'id', 'level_ref');
    }
}
