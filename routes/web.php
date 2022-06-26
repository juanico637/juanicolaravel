<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/dashboard',[HomeController::class, 'login_user'])->name('login-user'); //the route to be used

Route::get('/registration',[HomeController::class, 'registration']);
Route::post('/register-user', [HomeController::class, 'registeruser'])->name('register-user');

Route::get('/dashboard', [HomeController::class,'dashboard']);
Route::get('/administrator', [HomeController::class, 'administrator']);

Route::get('delete', function () {
    return view('delete');
});

Route::get('add', function () {
    return view('add');
});