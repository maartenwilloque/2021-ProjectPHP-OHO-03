<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Transfer
 *
 * @property int $id
 * @property int $expense_id
 * @property int $transport_id
 * @property string $reason
 * @property string $date
 * @property float $distance
 * @property string $unit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereExpenseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Transfer $transfer
 * @property-read \App\Expense $expense
 */
class Transfer extends Model
{
    public function expense()
    {
        return $this->belongsTo('App\Expense');
    }

    public function transport()
    {
        return $this->belongsTo('App\Transport','transport_id','id')->withDefault();
    }
}
