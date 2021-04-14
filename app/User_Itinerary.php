<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Itinerary extends Model
{
    public function user(){
        return $this->belongsTo(User::class)->withTimestamps();
    }
    public function post(){
        return $this->belongsTo(Post::class)->withTimestamps();
    }
}
