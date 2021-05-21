<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

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
