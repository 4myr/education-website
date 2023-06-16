<?php

namespace Database\Seeders;

use App\Enums\AdminRole;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Admin::create([
            'mobile' => '09120206881',
            'password' => \Hash::make('3039023'),
            'first_name' => 'امیرحسین',
            'last_name' => 'حسن زاده',
            'role' => AdminRole::Supervisor
        ]);
    }
}
