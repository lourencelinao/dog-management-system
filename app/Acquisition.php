<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquisition extends Model
{
    //one to many polymorphic relation
    public function acquisitionable(){
        return $this->morphTo();
    }
    
}
