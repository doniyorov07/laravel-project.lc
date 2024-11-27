<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::resource('categories', CategoryController::class)->only([
//    'index', 'store', 'show', 'update', 'destroy'
//]);
//
//
//Route::resource('categories', ProductController::class)->only([
//    'index', 'store', 'show', 'update', 'destroy'
//]);

Route::apiResources([
    'category' => CategoryController::class,
    'product' => ProductController::class,
]);

