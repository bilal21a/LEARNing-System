<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('theme:admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/login', 'auth.login')->name('login');
        Route::post('/login', [AuthController::class, 'store']);
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/home', [DashboardController::class, 'dashboard'])->name('home');

        // permission page
        Route::get('/permission', [DashBoardController::class, 'permission'])->name('permission');
        Route::post('/edit_perm', [DashBoardController::class, 'edit_perm'])->name('edit_perm');
        Route::post('/delete_perm', [DashBoardController::class, 'delete_perm'])->name('delete_perm');
        Route::post('/add_perm', [DashBoardController::class, 'add_perm'])->name('add_perm');

        // roles perm page
        Route::get('/rolespermission', [DashBoardController::class, 'rolespermission'])->name('rolespermission');
        Route::post('/edit_role', [DashBoardController::class, 'edit_role'])->name('edit_role');
        Route::post('/delete_role', [DashBoardController::class, 'delete_role'])->name('delete_role');
        Route::post('/add_role', [DashBoardController::class, 'add_role'])->name('add_role');

        //users page
        Route::get('/users', [DashBoardController::class, 'users'])->name('users');
        Route::post('/edit_users', [DashBoardController::class, 'edit_users'])->name('edit_users');
        Route::post('/delete_users', [DashBoardController::class, 'delete_users'])->name('delete_users');
    });
});
