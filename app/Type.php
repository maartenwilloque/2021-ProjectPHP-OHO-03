<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Type
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Type newModelQuery()
 * @method static Builder|Type newQuery()
 * @method static Builder|Type query()
 * @method static Builder|Type whereCreatedAt($value)
 * @method static Builder|Type whereId($value)
 * @method static Builder|Type whereName($value)
 * @method static Builder|Type whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read Collection|Expense[] $expense
 * @property-read int|null $expense_count
 */
class Type extends Model
{

    public function expenselines()
    {
        return $this->hasMany('App\Expenseline');
    }
}
