<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::group(['prefix' => 'panel'], function() {
    Route::get('/login/{type}', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
    Route::post('/login/{type}', [\App\Http\Controllers\LoginController::class, 'login'])->name('login.do');

    Route::get('/register/{type}', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register');
    Route::post('/register/{type}', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register.do');

    Route::group(['prefix' => 'teacher', 'middleware' => 'auth:teacher'], function() {
        Route::get('/', [\App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('panel.teacher.index');
        Route::get('/logout',[\App\Http\Controllers\Teacher\DashboardController::class, 'logout'])->name('panel.teacher.logout');


        Route::resource('/lectures', \App\Http\Controllers\Teacher\LecturesController::class)->names([
            'index' => 'panel.teacher.lectures.index',
            'create' => 'panel.teacher.lectures.create',
            'store' => 'panel.teacher.lectures.store',
            'show' => 'panel.teacher.lectures.show',
            'edit' => 'panel.teacher.lectures.edit',
            'update' => 'panel.teacher.lectures.update',
        ])->except('destroy');

        Route::patch('/sessions/{session}', [\App\Http\Controllers\Teacher\SessionsController::class, 'update'])->name('panel.teacher.sessions.update');


        Route::get('/lecture-students/{lecture}', [\App\Http\Controllers\Teacher\LectureStudentsController::class, 'index'])->name('panel.teacher.lecture-students.index');
        Route::patch('/lecture-students/{lecture}', [\App\Http\Controllers\Teacher\LectureStudentsController::class, 'update'])->name('panel.teacher.lecture-students.update');


        Route::get('/exam/all', [\App\Http\Controllers\Teacher\ExamController::class, 'all'])->name('panel.teacher.exam.all');
        Route::get('/exam/{exam}/students', [\App\Http\Controllers\Teacher\ExamController::class, 'students'])->name('panel.teacher.exam.students');
        Route::get('/exam/{exam}/students/{student}', [\App\Http\Controllers\Teacher\ExamController::class, 'check'])->name('panel.teacher.exam.students.check');
        Route::patch('/exam/{exam}/students/{student}', [\App\Http\Controllers\Teacher\ExamController::class, 'checkDone'])->name('panel.teacher.exam.students.check');

        Route::resource('/exam/{lecture}', \App\Http\Controllers\Teacher\ExamController::class, ['parameters' => ['{lecture}' => 'exam']])->names([
            'index' => 'panel.teacher.exam.index',
            'create' => 'panel.teacher.exam.create',
            'store' => 'panel.teacher.exam.store',
            'show' => 'panel.teacher.exam.show',
            'edit' => 'panel.teacher.exam.edit',
            'update' => 'panel.teacher.exam.update',
        ])->except('destroy');

    });

    Route::group(['prefix' => 'student', 'middleware' => 'auth:student'], function() {
        Route::get('/', [\App\Http\Controllers\Student\DashboardController::class, 'index'])->name('panel.student.index');
        Route::get('/logout',[\App\Http\Controllers\Student\DashboardController::class, 'logout'])->name('panel.student.logout');


        Route::resource('/lectures', \App\Http\Controllers\Student\LecturesController::class)->names([
            'index' => 'panel.student.lectures.index',
            'show' => 'panel.student.lectures.show',
        ])->except('destroy', 'edit', 'update', 'store', 'create');

        Route::patch('/sessions/{session}', [\App\Http\Controllers\Student\SessionsController::class, 'update'])->name('panel.student.sessions.update');


        Route::get('/exam/all', [\App\Http\Controllers\Student\ExamController::class, 'all'])->name('panel.student.exam.all');
        Route::get('/exam/{exam}', [\App\Http\Controllers\Student\ExamController::class, 'show'])->name('panel.student.exam.show');
        Route::patch('/exam/{exam}', [\App\Http\Controllers\Student\ExamController::class, 'answer'])->name('panel.student.exam.answer');


    });

    Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('panel.admin.index');
        Route::get('/logout',[\App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('panel.admin.logout');

        Route::resource('/news', \App\Http\Controllers\Admin\NewsController::class)->names([
            'index' => 'panel.admin.news.index',
            'create' => 'panel.admin.news.create',
            'store' => 'panel.admin.news.store',
            'show' => 'panel.admin.news.show',
            'edit' => 'panel.admin.news.edit',
            'update' => 'panel.admin.news.update',
        ])->except('destroy');

        Route::get('/news/{news}/delete', [\App\Http\Controllers\Admin\NewsController::class, 'destroy'])
            ->name('panel.admin.news.destroy');


        Route::resource('/admins', \App\Http\Controllers\Admin\AdminsController::class)->names([
            'index' => 'panel.admin.admins.index',
            'create' => 'panel.admin.admins.create',
            'store' => 'panel.admin.admins.store',
            'show' => 'panel.admin.admins.show',
            'edit' => 'panel.admin.admins.edit',
            'update' => 'panel.admin.admins.update',
        ])->except('destroy');

        Route::get('/admins/{admin}/delete', [\App\Http\Controllers\Admin\AdminsController::class, 'destroy'])
            ->name('panel.admin.admins.destroy');

        Route::resource('/students', \App\Http\Controllers\Admin\StudentsController::class)->names([
            'index' => 'panel.admin.students.index',
            'create' => 'panel.admin.students.create',
            'store' => 'panel.admin.students.store',
            'show' => 'panel.admin.students.show',
            'edit' => 'panel.admin.students.edit',
            'update' => 'panel.admin.students.update',
        ])->except('destroy');

        Route::get('/students/{student}/delete', [\App\Http\Controllers\Admin\StudentsController::class, 'destroy'])
            ->name('panel.admin.students.destroy');


        Route::resource('/teachers', \App\Http\Controllers\Admin\TeachersController::class)->names([
            'index' => 'panel.admin.teachers.index',
            'create' => 'panel.admin.teachers.create',
            'store' => 'panel.admin.teachers.store',
            'show' => 'panel.admin.teachers.show',
            'edit' => 'panel.admin.teachers.edit',
            'update' => 'panel.admin.teachers.update',
        ])->except('destroy');

        Route::get('/teachers/{teacher}/delete', [\App\Http\Controllers\Admin\TeachersController::class, 'destroy'])
            ->name('panel.admin.teachers.destroy');


        Route::resource('/terms', \App\Http\Controllers\Admin\TermsController::class)->names([
            'index' => 'panel.admin.terms.index',
            'create' => 'panel.admin.terms.create',
            'store' => 'panel.admin.terms.store',
            'show' => 'panel.admin.terms.show',
            'edit' => 'panel.admin.terms.edit',
            'update' => 'panel.admin.terms.update',
        ])->except('destroy');

        Route::get('/terms/{term}/delete', [\App\Http\Controllers\Admin\TermsController::class, 'destroy'])
            ->name('panel.admin.terms.destroy');


        Route::resource('/fields', \App\Http\Controllers\Admin\FieldsController::class)->names([
            'index' => 'panel.admin.fields.index',
            'create' => 'panel.admin.fields.create',
            'store' => 'panel.admin.fields.store',
            'show' => 'panel.admin.fields.show',
            'edit' => 'panel.admin.fields.edit',
            'update' => 'panel.admin.fields.update',
        ])->except('destroy');

        Route::get('/fields/{field}/delete', [\App\Http\Controllers\Admin\FieldsController::class, 'destroy'])
            ->name('panel.admin.fields.destroy');


        Route::resource('/lecture-groups', \App\Http\Controllers\Admin\LectureGroupsController::class)->names([
            'index' => 'panel.admin.lecture-groups.index',
            'create' => 'panel.admin.lecture-groups.create',
            'store' => 'panel.admin.lecture-groups.store',
            'show' => 'panel.admin.lecture-groups.show',
            'edit' => 'panel.admin.lecture-groups.edit',
            'update' => 'panel.admin.lecture-groups.update',
        ])->except('destroy');

        Route::get('/lecture-groups/{lectureGroup}/delete', [\App\Http\Controllers\Admin\LectureGroupsController::class, 'destroy'])
            ->name('panel.admin.lecture-groups.destroy');


        Route::resource('/lectures', \App\Http\Controllers\Admin\LecturesController::class)->names([
            'index' => 'panel.admin.lectures.index',
            'create' => 'panel.admin.lectures.create',
            'store' => 'panel.admin.lectures.store',
            'show' => 'panel.admin.lectures.show',
            'edit' => 'panel.admin.lectures.edit',
            'update' => 'panel.admin.lectures.update',
        ])->except('destroy');

        Route::get('/lectures/{lecture}/delete', [\App\Http\Controllers\Admin\LecturesController::class, 'destroy'])
            ->name('panel.admin.lectures.destroy');

        Route::resource('/lecture-students/{lecture}', \App\Http\Controllers\Admin\LectureStudentsController::class)->names([
            'index' => 'panel.admin.lecture-students.index',
            'create' => 'panel.admin.lecture-students.create',
            'store' => 'panel.admin.lecture-students.store',
        ])->except('destroy', 'show', 'edit', 'update');

        Route::get('/lecture-students/{lectureStudent}/delete', [\App\Http\Controllers\Admin\LectureStudentsController::class, 'destroy'])
            ->name('panel.admin.lecture-students.destroy');

        Route::get('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('panel.admin.settings.index');
        Route::patch('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('panel.admin.settings.update');

    });
});
