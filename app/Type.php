<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function parameterType()
    {
        return $this->hasMany('App/Parameter_Type');
    }

    public function expense()
    {
        return $this->hasMany('App/Expense');
    }
}
