<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    public function category(){  //$post-> category->name
        return $this->belongsTo(Category::class); //pertenece a 
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
