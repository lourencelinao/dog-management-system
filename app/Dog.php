<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    //

    public function users(){
        return $this->belongsToMany('App\Dog');
    }
}
