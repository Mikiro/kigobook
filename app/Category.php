<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function words(){
        return $this->hasMany(Word::class);
    }
    
}
