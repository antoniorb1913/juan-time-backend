<?php

use App\Http\Controllers\WatchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/watches', [WatchController::class, 'getAll']);
Route::get('/watches/{price}', [WatchController::class, 'getWatchByPrice']);
Route::get('/watch/{id}', [WatchController::class, 'get']);
Route::post('/watch', [WatchController::class, 'create']);
Route::delete('/watch/{id}', [WatchController::class, 'delete']);
Route::put('/watch/{id}', [WatchController::class, 'update']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
