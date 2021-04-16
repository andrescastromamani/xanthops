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
    public function scopeActive($query){
        return $query->where('active',1);
    }
    public function scopePopular($query){
        return $query->where('views', '>', 100);
    }
}
