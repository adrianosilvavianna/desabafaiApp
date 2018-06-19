<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reply(){
        return $this->belongsTo(Reply::class);
    }
}
