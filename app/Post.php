<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){ //post -> category
        return $this->belongsTo(Category::class);
    }
}
