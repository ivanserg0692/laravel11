<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Concerns;

class RoleUser extends Pivot
{
    use HasFactory;

    public $timestamps = true;

    protected static function booted()
    {
        static::saving(function (RoleUser $model) {
            $model->touchQuietly();
        });
        parent::booted();
    }


}
