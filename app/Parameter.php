<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Parameter
 *
 * @property int $id
 * @property int $parameternaam_id
 * @property float $waarde
 * @property string $van_datum
 * @property string $tot_datum
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereParameternaamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereTotDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereVanDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereWaarde($value)
 * @mixin \Eloquent
 */
class Parameter extends Model
{
    //
}
