<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lecture_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyInteger('order');
            $table->json('files')->nullable();
            $table->boolean('is_held')->default(false);
            $table->unsignedBigInteger('lecture_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lecture_sessions');
    }
};
