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
    });

    Route::group(['prefix' => 'student', 'middleware' => 'auth:student'], function() {
        Route::get('/', [\App\Http\Controllers\Student\DashboardController::class, 'index'])->name('panel.student.index');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('panel.admin.index');

        Route::resource('/news', \App\Http\Controllers\Admin\NewsController::class)->names([
            'index' => 'panel.admin.news.index',
            'create' => 'panel.admin.news.create',
            'store' => 'panel.admin.news.store',
            'show' => 'panel.admin.news.show',
            'edit' => 'panel.admin.news.edit',
            'update' => 'panel.admin.news.update',
            'destroy' => 'panel.admin.news.destroy',
        ]);

    });
});
