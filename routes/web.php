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

use App\Http\Controllers\OfficerController;

Route::get('/officer/create', [OfficerController::class, 'create'])->name('officer.create');

Route::post('/officers', [OfficerController::class, 'store'])->name('officers.store');

Route::get('/officers', [OfficerController::class, 'index'])->name('officers.index');


Route::get('/officer/view', [OfficerController::class, 'view'])->name('officer.view');

use App\Http\Controllers\WhiteCardController;

Route::get('/white_card/create', [WhiteCardController::class, 'create'])->name('white_card.create');

Route::post('/whitecard/store', [WhiteCardController::class, 'store'])->name('whitecard.store');

Route::get('/white_card/view', [WhiteCardController::class, 'view'])->name('white_card.view');

Route::get('/white_card/info', [WhiteCardController::class, 'info'])->name('white_card.info');

Route::get('/white_card/status', [WhiteCardController::class, 'status'])->name('white_card.status');

