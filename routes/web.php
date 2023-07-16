<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


    Route::get('/',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'saveRegister'])->name('user.register');
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginUser'])->name('user.login');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
    Route::post('/update',[UserController::class,'update'])->name('update');
});

