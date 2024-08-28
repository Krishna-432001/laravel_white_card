<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index'])->name('home.index');

use App\Http\Controllers\AuthController;

Route::post('/officer/login', [AuthController::class, 'authenticate'])->name('officer.login');


Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('home.register');