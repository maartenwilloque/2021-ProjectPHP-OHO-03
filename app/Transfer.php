<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    public function expense()
    {
        return $this->belongsTo('App/Expense');
    }

    public function transfer()
    {
        return $this->belongsTo('App/Trensfer');
    }
}
