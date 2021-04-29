<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Verplaatsing
 *
 * @property int $id
 * @property int $onkost_id
 * @property int $vervoermiddel_id
 * @property string $reden
 * @property string $datum
 * @property float $afstand
 * @property string $eenheid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereAfstand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereEenheid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereOnkostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereReden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verplaatsing whereVervoermiddelId($value)
 * @mixin \Eloquent
 */
class Verplaatsing extends Model
{
//
}
