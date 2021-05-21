<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenseline extends Model
{
    public function expense()
    {
        return $this->belongsTo('App\Expense','expense_id','id')->withDefault();
    }
    public function type()
    {
        return $this->belongsTo('App\Type','type_id','id')->withDefault();
    }

}
