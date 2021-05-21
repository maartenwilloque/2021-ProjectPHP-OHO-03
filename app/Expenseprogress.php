<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Expenseprogress
 *
 * @property int $id
 * @property int $expense_id
 * @property int $inspector_id
 * @property int $status_id
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Expenseprogress newModelQuery()
 * @method static Builder|Expenseprogress newQuery()
 * @method static Builder|Expenseprogress query()
 * @method static Builder|Expenseprogress whereCreatedAt($value)
 * @method static Builder|Expenseprogress whereExpenseId($value)
 * @method static Builder|Expenseprogress whereId($value)
 * @method static Builder|Expenseprogress whereInspectorId($value)
 * @method static Builder|Expenseprogress whereNote($value)
 * @method static Builder|Expenseprogress whereStatusId($value)
 * @method static Builder|Expenseprogress whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\User $approver
 * @property-read \App\Expense $onkost
 * @property-read \App\Status $status
 */
class Expenseprogress extends Model
{
    protected $fillable = [
        'expense_id', 'inspector_id','status_id','note','active',''
    ];
    public function status()
    {

        return $this->belongsTo('App\Status','status_id','id');
    }
    public function expense()
    {
        return $this->belongsTo('App\Expense','expense_id','id');
    }

    public function inspector()
    {
        return $this->belongsTo('App\User','inspector_id','id')->withDefault();
    }
}
