<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Add foreign key to 'answers' table
        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('lecture_student_id')->references('id')->on('lecture_students')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });

        // Add foreign key to 'exams' table
        Schema::table('exams', function (Blueprint $table) {
            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
        });

        // Add foreign key to 'lecture_groups' table
        Schema::table('lecture_groups', function (Blueprint $table) {
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
        });

        // Add foreign key to 'lecture_sessions' table
        Schema::table('lecture_sessions', function (Blueprint $table) {
            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
        });

        // Add foreign keys to 'lecture_students' table
        Schema::table('lecture_students', function (Blueprint $table) {
            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });

        // Add foreign keys to 'lectures' table
        Schema::table('lectures', function (Blueprint $table) {
            $table->foreign('lecture_group_id')->references('id')->on('lecture_groups')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');
        });

        // Add foreign key to 'news' table
        Schema::table('news', function (Blueprint $table) {
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });

        // Add foreign key to 'questions' table
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
        });

        // Add foreign keys to 'students' table
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop foreign keys from 'answers' table
        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign(['lecture_student_id']);
            $table->dropForeign(['question_id']);
        });

        // Drop foreign key from 'exams' table
        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign(['lecture_id']);
        });

        // Drop foreign key from 'lecture_groups' table
        Schema::table('lecture_groups', function (Blueprint $table) {
            $table->dropForeign(['field_id']);
        });

        // Drop foreign key from 'lecture_sessions' table
        Schema::table('lecture_sessions', function (Blueprint $table) {
            $table->dropForeign(['lecture_id']);
        });

        // Drop foreign keys from 'lecture_students' table
        Schema::table('lecture_students', function (Blueprint $table) {
            $table->dropForeign(['lecture_id']);
            $table->dropForeign(['student_id']);
        });

        // Drop foreign keys from 'lectures' table
        Schema::table('lectures', function (Blueprint $table) {
            $table->dropForeign(['lecture_group_id']);
            $table->dropForeign(['teacher_id']);
            $table->dropForeign(['term_id']);
        });

        // Drop foreign key from 'news' table
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
        });

        // Drop foreign key from 'questions' table
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['exam_id']);
        });

        // Drop foreign keys from 'students' table
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['field_id']);
            $table->dropForeign(['student_id']);
        });
    }
};
