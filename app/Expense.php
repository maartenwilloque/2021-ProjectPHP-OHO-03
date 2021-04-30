<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();
    }
    public function costcentre()
    {
        return $this->belongsTo('App\Costcentre')->withDefault();
    }
    public function type()
    {
        return $this->belongsTo('App\Type')->withDefault();
    }
    public function attachements()
    {
        return $this->hasMany('App\Attachement');
    }
    public function amounts()
    {
        return $this->hasMany('App\Amount');
    }
    public function transfers()
    {
        return $this->hasMany('App\Transfer');
    }
    public function expenseprogresses()
    {
        return $this->hasMany('App\Expenseporgress');
    }


}
