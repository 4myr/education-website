<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LectureGroup extends Model
{
    protected $fillable = [
        'name',
        'code',
        'is_active',
        'field_id',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
