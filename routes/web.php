<?php

use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\SetSessionLifetime;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/cart', function () {
    return view('frontend.cart');
});
Route::get('/payment', function () {
    return view('frontend.payment');
});
Route::get('/product', function () {
    return view('frontend.product');
});
Route::get('/product-detail', function () {
    return view('frontend.product-detail');
});
Route::get('/profile', function () {
    return view('frontend.profile');
});
Route::get('/support', function () {
    return view('frontend.support');
});
Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});
Route::get('/login', function () {
    return view('frontend.auth.login');
});
Route::get('/register', function () {
    return view('frontend.auth.register');
});


// Route::middleware(CheckAdmin::class)->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index']);
// });
// Route::get('/admin/dashboard', [AdminController::class, 'index'])
//     ->middleware(CheckAdmin::class);



Route::prefix('admin')->group(function () {
    Route::middleware([CheckAdmin::class, SetSessionLifetime::class])->group(function () {
        Route::get('/dashboard', function () {
            return view('backend.dashboard');
        })->name('admin.dashboard');

        Route::get('/users', function () {
            return view('backend.users');
        });

        Route::post('/logout', [AuthAdminController::class, 'logout'])->name('admin.logout');
    });

    Route::get('/login', [AuthAdminController::class, 'getlogin'])->name('admin.login');
    Route::post('/login', [AuthAdminController::class, 'postLogin']);
});