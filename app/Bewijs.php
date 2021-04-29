<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Bewijs
 *
 * @property int $id
 * @property int $onkost_id
 * @property string $bewijs
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs whereBewijs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs whereOnkostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bewijs whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bewijs extends Model
{
    //
}
