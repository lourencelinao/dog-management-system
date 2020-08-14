<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    public function users(){
        return $this->hasMany('App\User');
    }

    public function images(){
        return $this->morphMany('App\Image', 'imageable');
    }

}
