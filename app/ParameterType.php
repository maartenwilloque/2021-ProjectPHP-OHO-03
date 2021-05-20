<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParameterType extends Model
{
    public function type()
    {
        return $this->belongsTo('App\Type')->withDefault();
    }

}
