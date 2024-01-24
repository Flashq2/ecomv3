<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'login'], function () {
     Route::get('',[LoginController::class,'index']);
});