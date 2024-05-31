<?php

use App\Livewire\Admin\AdminDashboard;
use App\Livewire\User\UserDashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Prefix User Routes
Route::prefix('user')->group(function () {

    //User Protected Routes with Middleware
    Route::group(['middleware' => ['auth']], function() {
        //default routes
        Route::get('/dashboard', UserDashboard::class)->name('user_dashboard');


    });
});

//Protected Admin Routes
Route::prefix('/admin')->group(function () {
    Route::group(['middleware' =>['auth','admin']], function () {

        //Super Admin Private Pages via AdminController
        Route::get('/dashboard', AdminDashboard::class)->name('admin_dashboard');
        Route::get('/profile', AdminDashboard::class)->name('profile');
        Route::get('/users', AdminDashboard::class)->name('users');

    });
});
