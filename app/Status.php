<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function expenseprogresses()
    {
        return $this->hasMany('App/Expenseprogress');
    }
}
