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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('user-login');
});

Route::get('/register', function () {
    return view('user-register');
});

Route::get('/tshirts', function () {
    return view('tshirts');
});

Route::get('/clothes', function () {
    return view('clothes');
});

Route::get('/shoes', function () {
    return view('shoes');
});

Route::get('/login-admin', function () {
    return view('admin-login');
});


Route::get('/paypage', function () {
    return view('paypage');
});

Route::get('/detail', function () {
    return view('detail');
});