<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurrenderIntake extends Model
{
    //one to one polymorphic relationship
    public function intake(){
        return $this->morphOne('App\Intake', 'intakeable');
    }

}
