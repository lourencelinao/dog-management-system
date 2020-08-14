<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransfereeIntake extends Model
{
    //one to one polymorphic relationship
    public function acquisition(){
        return $this->morphOne('App\Intake', 'intakeable');
    }
}
