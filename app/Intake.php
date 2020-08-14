<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    //one to many polymorphic relation
    public function intakeable(){
        return $this->morphTo();
    }
    
}
