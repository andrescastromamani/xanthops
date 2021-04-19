<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title', 'description',
    ];
    /*
    protected $hidden = ['title','description'];
    protected $appends = ['post_name','post_excerpt'];
    Public function getPostNameAttribute(){
        return strtoupper($this->title);
    }
    Public function getPostExcerptAttribute(){
        return substr($this->description,0, 240).'...';
    }*/
}
