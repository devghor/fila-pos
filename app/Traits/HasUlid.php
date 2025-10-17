<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUlid
{
    protected static function bootHasUlidKey()
    {
        static::saving(function ($model) {
            if (empty($model->ulid)) {
                $model->ulid = (string) Str::ulid();
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'ulid';
    }
}
