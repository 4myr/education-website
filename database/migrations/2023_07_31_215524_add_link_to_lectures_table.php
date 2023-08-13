<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('lectures', function (Blueprint $table) {
            $table->string('link')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('lectures', function (Blueprint $table) {
            //
        });
    }
};
