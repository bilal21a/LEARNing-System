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


Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::middleware(['auth:admin'])->group(function () {
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
    Route::view('/home', 'admin.index')->name('home');
});

Route::group(['namespace' => 'teacher'], function () {
    Route::get('add_schedule', [DashboardController::class, 'index'])->name('add_schedule');
    Route::get('schedule_save_second/{field}/{time}/{time_data}', [DashboardController::class, 'schedule_save_second'])->name('schedule_save_second');
    Route::get('free_trail', [DashboardController::class, 'free_trail'])->name('free_trail');
    Route::post('approve_trail', [DashboardController::class, 'approve_trail'])->name('approve_trail');
});

Route::get('book_teacher/{id?}', [BookTeacherController::class, 'index'])->name('book_teacher');
Route::post('get_free_trail', [BookTeacherController::class, 'get_free_trail'])->name('get_free_trail');


Route::get('/home2', function () {
    return view('home');
})->middleware(['auth'])->name('home2');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';