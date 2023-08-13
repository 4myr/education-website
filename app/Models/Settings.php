<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'name',
        'value',
    ];

    public static function updateSome($key, $value): void
    {
        Settings::query()->updateOrCreate(
            [
                'name' => $key
            ], [
                'value' => $value
            ]
        );
    }

    public static function getSome($key)
    {
        return self::query()->where('name', $key)->first()?->value;
    }
}
