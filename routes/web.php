<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductInfoController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// Route::get('',[PaymentController::class,'calulater']);
Route::group(['prefix' => 'login'], function () {
     Route::get('',[LoginController::class,'index']);
});

Route::group(['prefix' => 'home'], function () {
     Route::get('',[DashboardController::class,'index']);
});

Route::group(['prefix' => 'product'], function () {
     Route::get('',[ProductController::class,'index']);
});

Route::group(['prefix' => 'product_list'], function () {
     Route::get('',[ProductListController::class,'index']);
});

Route::group(['prefix' => 'payment'], function () {
     Route::get('',[PaymentController::class,'index']);
});

Route::group(['prefix' => 'user'], function () {
     Route::get('',[UserController::class,'index']);
});

Route::group(['prefix' => 'product_detail'], function () {
     Route::get('',[ProductDetailController::class,'index']);
});
Route::group(['prefix' => 'product_info'], function () {
     Route::get('',[ProductInfoController::class,'index']);
});