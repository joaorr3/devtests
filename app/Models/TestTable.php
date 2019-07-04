<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TestTable
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TestTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TestTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TestTable query()
 * @mixin \Eloquent
 */
class TestTable extends Model
{
    protected $fillable = [

        'title',

    ];
}
