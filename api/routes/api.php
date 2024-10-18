<?php

use App\Http\Controllers\entregasController;
use App\Http\Controllers\vacacionesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/vacaciones{id}/realitzar', [vacacionesController::class, 'realitzar']);
Route::delete('/vacaciones{id}/anular', [vacacionesController::class, 'anular']);
Route::post('/entregas{id}/entregar', [entregasController::class, 'entregar']);
Route::post('/entregas{id}/reentregar', [entregasController::class, 'reentregar']);
