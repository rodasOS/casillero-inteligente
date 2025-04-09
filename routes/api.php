<?php

use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\MovimientoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/movimientos', [MovimientoController::class, 'create']);