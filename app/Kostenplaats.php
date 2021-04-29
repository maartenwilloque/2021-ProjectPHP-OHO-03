<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Kostenplaats
 *
 * @property int $id
 * @property int $user_id
 * @property string $kostenplaats
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats whereKostenplaats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $omschrijving
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats whereOmschrijving($value)
 * @property int $verantwoordelijke
 * @method static \Illuminate\Database\Eloquent\Builder|Kostenplaats whereVerantwoordelijke($value)
 */
class Kostenplaats extends Model
{
    //
}
