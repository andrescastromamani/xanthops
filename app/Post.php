<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function users(){
        return $this->belongsToMany(User::class,'user__itineraries', 'post_id','user_id');
    }
}
