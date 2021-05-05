<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Expense
 *
 * @property int $id
 * @property int $costcentre_id
 * @property int $user_id
 * @property int $type_id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Amount[] $amounts
 * @property-read int|null $amounts_count
 * @property-read \App\Costcentre $costcentre
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Transfer[] $transfers
 * @property-read int|null $transfers_count
 * @property-read \App\Type $type
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCostcentreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Attachment[] $attachements
 * @property-read int|null $attachements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Expenseprogress[] $expenseprgresses
 * @property-read int|null $expenseprgresses_count
 */
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
        return $this->hasMany('App\Attachment');
    }
    public function amounts()
    {
        return $this->hasMany('App\Amount');
    }
    public function transfers()
    {
        return $this->hasMany('App\Transfer');
    }
    public function expenseprgresses()
    {
        return $this->hasMany('App\Expenseprogress');
    }


}
