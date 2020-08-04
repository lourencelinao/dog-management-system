<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransfereeAcquisition extends Model
{
    //one to one polymorphic relationship
    public function acquisition(){
        return $this->morphOne('App\Acquisition', 'acquisitionable');
    }
}
