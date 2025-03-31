<?php

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
Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/admin/users', function () {
    return view('backend.users');
});
Route::get('/admin/login', function () {
    return view('backend.auth.login');
});
