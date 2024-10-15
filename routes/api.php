<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');


Route::resource('/licenses', LicenseController::class)->middleware('auth:sanctum');
Route::resource('/fines', FineController::class)->middleware('auth:sanctum');
Route::resource('/cars', CarController::class)->middleware('auth:sanctum');

