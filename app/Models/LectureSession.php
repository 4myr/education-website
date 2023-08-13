<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LectureSession extends Model
{
    protected $fillable = [
        'title',
        'order',
        'is_held',
        'lecture_id',
        'files'
    ];

    protected $casts = [
        'files' => 'array'
    ];

    public static function bulkCreate($lectureId, $order): void
    {
        self::create([
            'title' => 'جلسه ' . $order,
            'order' => $order,
            'lecture_id' => $lectureId
        ]);
    }
}
