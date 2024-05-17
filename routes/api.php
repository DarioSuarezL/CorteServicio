<?php

use App\Http\Controllers\CoordenadaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
