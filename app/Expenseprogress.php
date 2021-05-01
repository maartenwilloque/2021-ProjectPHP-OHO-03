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
 */
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
