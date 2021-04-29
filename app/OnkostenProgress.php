<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OnkostenProgress
 *
 * @property int $id
 * @property int $onkost_id
 * @property int $keurder_id
 * @property int $status_id
 * @property string|null $opmerking
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress query()
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress whereKeurderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress whereOnkostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress whereOpmerking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnkostenProgress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OnkostenProgress extends Model
{
    //
}
