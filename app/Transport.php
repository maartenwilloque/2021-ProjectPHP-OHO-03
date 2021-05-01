<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Transport
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Transport extends Model
{
    public function transfers()
    {
        return $this->hasMany('App/Transport');
    }
}
