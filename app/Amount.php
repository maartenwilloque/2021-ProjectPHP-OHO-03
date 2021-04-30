<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    public function expense()
    {
       return $this->belongsTo('App/Expense')->withDefault();
    }
}
