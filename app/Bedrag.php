<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Bedrag
 *
 * @property int $id
 * @property int $onkost_id
 * @property float $bedrag
 * @property float $resterend_bedrag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag whereBedrag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag whereOnkostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag whereResterendBedrag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bedrag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bedrag extends Model
{
    //
}
