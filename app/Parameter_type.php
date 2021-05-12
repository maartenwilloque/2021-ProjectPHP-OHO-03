<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Parameter_type
 *
 * @property int $id
 * @property float $value
 * @property int $type_id
 * @property string $from_date
 * @property string $to_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type whereFromDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type whereToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter_type whereValue($value)
 * @mixin \Eloquent
 * @property-read \App\Type $type
 */
class Parameter_type extends Model
{
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
