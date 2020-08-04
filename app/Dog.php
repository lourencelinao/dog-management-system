<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    //

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function images(){
        return $this->morphMany('App\Image', 'imageable');
    }

    public function outcome(){
        return $this->hasOne('App\Outcome');
    }
}
