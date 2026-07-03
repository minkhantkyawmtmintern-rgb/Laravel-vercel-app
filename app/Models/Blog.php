<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 * @mixin \Illuminate\Database\Eloquent\Collection
 * @method bool delete()
 */
class Blog extends Model
{
    protected $fillable = ['title', 'content'];
}
