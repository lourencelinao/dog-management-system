<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurrenderDogApplication extends Model
{
    //one to one polymorphic relation
    public function application(){
        return $this->morphOne('App\Application', 'applicationable');
    }
}
