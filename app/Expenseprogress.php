<?php

namespace App;

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
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress whereExpenseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress whereInspectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenseprogress whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\User $approver
 * @property-read \App\Expense $onkost
 * @property-read \App\Status $status
 */
class Expenseprogress extends Model
{
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
        return $this->belongsTo('App\User','inspector_id','id');
    }
}
