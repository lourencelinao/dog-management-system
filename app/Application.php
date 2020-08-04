<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //one to one polymorphic relation
    public function applicationable(){
        return $this->morphTo();
    }
}
