<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Costcentre
 *
 * @property int $id
 * @property int $responsible
 * @property string $costcentre
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre whereCostcentre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre whereResponsible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Costcentre whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Costcentre extends Model
{
    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
    public function user()
    {
        return $this->belongsTo('App\User','responsible','id')->withDefault();
    }
}
