<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'password',
        'student_id',
        'approved'
    ];

    protected $appends = [
      'full_name'
    ];

    public function getFullNameAttribute(): string
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
