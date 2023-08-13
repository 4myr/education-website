<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Teacher extends Authenticatable
{
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'password',
        'approved'
    ];

    protected $appends = ['full_name'];

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }
}
