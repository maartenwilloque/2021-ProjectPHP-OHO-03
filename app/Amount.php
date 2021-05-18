<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Amount
 *
 * @property int $id
 * @property int $expense_id
 * @property float $amount
 * @property float $remaining_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Amount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amount query()
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereExpenseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereRemainingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Expense $expense
 */
class Amount extends Model
{
    public function expense()
    {
       return $this->belongsTo('App\Expense','expense_id','id')->withDefault();
    }
}
