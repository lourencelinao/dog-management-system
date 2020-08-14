<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RescueIntake extends Model
{
    //one to one polymorphic relationship
    public function intake(){
        return $this->morphOne('App\Intake', 'intakeable');
    }
}
