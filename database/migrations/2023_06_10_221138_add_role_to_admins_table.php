<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->enum('role', ['supervisor', 'admin', 'content-maker'])->default('admin');
        });
    }

    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            //
        });
    }
};
