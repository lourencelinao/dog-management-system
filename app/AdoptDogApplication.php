<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdoptDogApplication extends Model
{
    //one to one polymorphic relation
    public function application(){
        return $this->morphOne('App\Application', 'applicationable');
    }
}
