<?php

use App\Http\Controllers\Admin\{SupplierController,ProductController};
use App\Http\Controllers\ProfileController;
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
    Route::view('/register', 'Home.register')->name('register.user');
    Route::view('/login', 'Home.login')->name('login.user');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::view('/home', 'Admin.index')->name('admin.home');

    //settings
    Route::view('/settings', 'settings.index')->name('admin.settings');
    Route::view('/change-password', 'settings.change-password')->name('admin.password');

    //profile
    Route::get('/admin-profile', [ProfileController::class, 'profile_index'])->name('admin.profile');
    Route::post('/admin-profile-store', [ProfileController::class, 'profile_update'])->name('adminProfile.update');

    //supplier
    Route::get('/suppliers', [SupplierController::class, 'supplier_index'])->name('supplier.index');
    Route::post('/suppliers-create', [SupplierController::class, 'supplier_store'])->name('supplier.store');
    Route::put('/suppliers-update', [SupplierController::class, 'supplier_update'])->name('supplier.update');
    Route::delete('/supplier-delete/{id}', [SupplierController::class,'supplier_destroy'])->name('supplier.destroy');

    //product
    Route::get('/products',[ProductController::class,'product_index'])->name('product.index');
    Route::post('/products-create', [ProductController::class, 'product_store'])->name('product.store');
});
