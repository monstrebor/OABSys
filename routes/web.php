<?php

use App\Http\Controllers\UserLoginController;
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

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'Home.index')->name('login');
    Route::view('/home', 'Home.index')->name('home.login');
    Route::view('/register', 'Home.register')->name('register.user');
    Route::view('/login','Home.login')->name('login.index');
    Route::post('/login-store', [UserLoginController::class, 'user_login'])->name('login.store');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::view('/home', 'Admin.index')->name('admin.home');


    //settings
    Route::view('/settings', 'settings.index')->name('admin.settings');
    Route::view('/change-password', 'settings.change-password')->name('admin.password');
});
