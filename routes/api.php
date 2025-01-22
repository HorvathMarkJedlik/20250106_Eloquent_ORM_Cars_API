<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/cars/search/{type}', [CarController::class, 'searchByType']);
Route::apiResource('cars', CarController::class);

Route::apiResource('categories', CategoryController::class);