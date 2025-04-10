<?php

use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/herramientas', [HerramientaController::class, 'index']);

Route::post('/herramientas', [HerramientaController::class, 'create']);

Route::post('/movimientos', [MovimientoController::class, 'create']);