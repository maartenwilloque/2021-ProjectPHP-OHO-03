<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function expense()
    {
        return $this->belongsTo('App/Expense')->withDefault();
    }
}
