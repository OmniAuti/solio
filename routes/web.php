<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
// HOME PAGE
Route::get('/', function () {
    return view('front_page');
});
// CREATE USER
Route::get('/create-account', [RegisterUserController::class, 'view']);
Route::post('/create-account', [RegisterUserController::class, 'store']);
// LOGIN
Route::get('/login', [SessionController::class, 'view']);
Route::post('/login', [SessionController::class, 'store']);
// DASHBOARD
Route::get('/dashboard', function() {
    return view('pages/dashboard');
});