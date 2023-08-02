<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lecture_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('code');
            $table->boolean('is_active');
            $table->unsignedBigInteger('field_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lecture_groups');
    }
};
