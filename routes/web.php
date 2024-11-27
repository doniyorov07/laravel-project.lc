<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Livewire\Admin\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::prefix('auth')->middleware('guest')->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::get('register',[AuthController::class,'register'])->name('register');
    Route::post('login',[AuthController::class,'loginUser'])->name('login.handle');
    Route::post('register',[AuthController::class,'registerUser'])->name('register.handle');
});

Route::post('auth/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');



Route::name('admin.')->middleware('auth')->prefix('admin')->group(function(){

    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::get('view', [DashboardController::class,'index'])->name('view');
    Route::get('user', UserController::class)->name('user');
    Route::get('user/create', UserController::class)->name('user.create');

});
