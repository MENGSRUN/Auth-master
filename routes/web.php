<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;

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
Route::middleware(['unauth'])->group(function () {
    Route::get('/', [ViewController::class,'login'])->name('login');
    Route::post('/authenticate', [AuthController::class,'authenticate'])->name('authenticate');
});

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::middleware(['mainware'])->group(function () {
    Route::get('/dashboard', [ViewController::class,'dashboard'])->name('dashboard');
});