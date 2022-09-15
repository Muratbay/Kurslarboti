<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\KurcController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/login');
});

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/check',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);
Route::middleware('auth')->group(function(){
Route::resource('groups',GroupController::class);
Route::resource('kurcs',KurcController::class);   
});


