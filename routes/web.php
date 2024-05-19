<?php

use App\Models\Coordenada;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoordenadaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/coordenadas', [CoordenadaController::class, 'index'])->name('coordenadas.index');

