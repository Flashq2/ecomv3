<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductListController;
use Illuminate\Support\Facades\Route;

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