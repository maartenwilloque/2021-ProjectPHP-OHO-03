<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenseprogress extends Model
{
    public function status()
    {
        return $this->belongsTo('App/Status');
    }
    public function onkost()
    {
        return $this->belongsTo('App/Expense');
    }

    public function approver()
    {
        return $this->belongsTo('App/USer');
    }
}
