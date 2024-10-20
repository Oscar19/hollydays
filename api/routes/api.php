<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaVacacionalController;
use App\Http\Controllers\EntregaItAcademyController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/pla-vacacional', [PlaVacacionalController::class, 'store']);
Route::post('/entrega-it-academy', [EntregaItAcademyController::class, 'store']);

Route::post('/pla-vacacional/{id}/realitzar', [PlaVacacionalController::class, 'realitzar']);
Route::delete('/pla-vacacional/{id}/anular', [PlaVacacionalController::class, 'anular']);
Route::post('/entrega-it-academy/{id}/entregar', [EntregaItAcademyController::class, 'entregar']);
Route::post('/entrega-it-academy/{id}/reentregar', [EntregaItAcademyController::class, 'reentregar']);
