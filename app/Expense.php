<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * App\Expense
 *
 * @property int $id
 * @property int $costcentre_id
 * @property int $user_id
 * @property int $type_id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Amount[] $amounts
 * @property-read int|null $amounts_count
 * @property-read Costcentre $costcentre
 * @property-read Collection|Transfer[] $transfers
 * @property-read int|null $transfers_count
 * @property-read Type $type
 * @property-read User $user
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
 * @mixin Eloquent
 * @property-read Collection|\App\Attachment[] $attachements
 * @property-read int|null $attachements_count
 * @property-read Collection|\App\Expenseprogress[] $expenseprgresses
 * @property-read int|null $expenseprgresses_count
 * @property-read Collection|\App\Expenseprogress[] $expenseprogresses
 * @property-read int|null $expenseprogresses_count
 */
class Expense extends Model
{
    use Notifiable;
    protected $fillable = [
        'costcentre_id','user_id', 'type_id','name','description',''
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id')->withDefault();
    }
    public function costcentre()
    {
        return $this->belongsTo('App\Costcentre','costcenter_id','id')->withDefault();
    }
    public function type()
    {
        return $this->belongsTo('App\Type','type_id','id')->withDefault();
    }
    public function attachments()
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
    public function expenseprogresss()
    {
        return $this->hasMany('App\Expenseprogress');
    }


}
