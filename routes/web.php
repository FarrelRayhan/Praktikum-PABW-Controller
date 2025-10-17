<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
