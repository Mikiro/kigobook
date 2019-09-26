<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
