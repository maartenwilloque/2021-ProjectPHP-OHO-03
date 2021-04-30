<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    public function transfers()
    {
        return $this->hasMany('App/Transport');
    }
}
