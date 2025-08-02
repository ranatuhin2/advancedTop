<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['middlware'=>'throttle:limiter'])->prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create',[UserController::class, 'create'])->name('create');
});


Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginPost'])->name('create');


Route::get('/apply', [AuthController::class, 'apply'])->name('apply');
