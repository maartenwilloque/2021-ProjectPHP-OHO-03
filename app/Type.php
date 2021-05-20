<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Type
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Expense[] $expense
 * @property-read int|null $expense_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Parameter_type[] $parameterType
 * @property-read int|null $parameter_type_count
 */
class Type extends Model
{
    public function parameterType()
    {
        return $this->hasMany('App\ParameterType','id','type_id');
    }

    public function expense()
    {
        return $this->hasMany('App\Expense,id,type_id');
    }
}
