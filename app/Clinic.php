<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    //
    public function veterinarians(){
        return $this->hasMany('App\Veterinarian');
    }
}
