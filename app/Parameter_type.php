<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter_type extends Model
{
    public function type()
    {
        return $this->belongsTo('App/Type');
    }
}
