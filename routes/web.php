<?php

use App\Http\Controllers\BookTeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/2', function () {
    return view('frontend.page-teacher');
});


Route::group(['namespace' => 'teacher'], function () {
    Route::get('add_schedule', [DashboardController::class, 'index'])->name('add_schedule');
    Route::get('schedule_save/{field}/{time}', [DashboardController::class, 'schedule_save'])->name('schedule_save');

});

Route::get('book_teacher', [BookTeacherController::class, 'index'])->name('book_teacher');



require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

