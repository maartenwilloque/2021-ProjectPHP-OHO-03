<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Onkost
 *
 * @property int $id
 * @property int $kostenplaats_id
 * @property int $user_id
 * @property int $type_id
 * @property string $onkostnaam
 * @property string|null $beschrijving
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost query()
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereBeschrijving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereKostenplaatsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereOnkostnaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereUserId($value)
 * @mixin \Eloquent
 * @property string $naam
 * @method static \Illuminate\Database\Eloquent\Builder|Onkost whereNaam($value)
 */
class Onkost extends Model
{
    //
}
