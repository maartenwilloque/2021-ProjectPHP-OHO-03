<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costcentre extends Model
{
    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();
    }
}
