<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// User Registration
Route::post('/register',[UserController::class,'register'])->name('register');// User Registrartion
Route::post('/set-password',[UserController::class,'password_page'] )->name("set-password");// Validating the registered User
Route::post('/save-password',[UserController::class,'save_password'])->name('save-password');// Validating the registered User