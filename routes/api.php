<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\CoordenadaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/coordenadas', [CoordenadaController::class, 'storeApi']);
Route::get('/coordenadas', [CoordenadaController::class, 'indexApi']);
Route::get('/coordenadas/{id}/show', [CoordenadaController::class, 'showApi']);
Route::put('/coordenadas/{id}/update', [CoordenadaController::class, 'updateApi']);
Route::delete('/coordenadas/{id}/destroy', [CoordenadaController::class, 'destroyApi']);


Route::post('/coordenadas/{id}/cortar-servicio', [CoordenadaController::class, 'cortarServicioApi']);
Route::post('/coordenadas/{id}/restaurar-servicio', [CoordenadaController::class, 'restaurarServicioApi']);
Route::get('/coordenadas/sin-cortar', [CoordenadaController::class, 'sinCortarApi']);
Route::get('/coordenadas/cortadas', [CoordenadaController::class, 'cortadasApi']);


Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/logout', [AuthApiController::class, 'logout'])->middleware('auth:sanctum');
