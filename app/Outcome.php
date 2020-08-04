<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    //
    public function dog(){
        return $this->hasOne('App\Dog');
    }
}
