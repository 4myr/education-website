<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'first_name',
        'last_name',
        'password',
        'mobile',
        'role'
    ];
    protected $appends = [
      'full_name'
    ];

    public function getFullNameAttribute(): string
    {
        return $this->first_name . " " . $this->last_name;
    }
}
