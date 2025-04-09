<?php

use App\Http\Controllers\HerramientaController;
use App\Models\Herramienta;
use App\Models\Movimiento;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {

    $herramientas = Herramienta::all();
    $usuarios = Usuario::all();
    // $movimientos = Movimiento::with('usuario')->get();
    $movimientos = Movimiento::join('usuarios', 'movimientos.id_usuario', '=', 'usuarios.id')
    ->join('herramientas', 'movimientos.id_herramienta', '=', 'herramientas.id')
    ->select('movimientos.*', 'usuarios.nombre as nombre_usuario', 'herramientas.nombre as nombre_herramienta')
    ->get();

    return view('home', [
        'herramientas' => $herramientas,
        'movimientos' => $movimientos,
        'usuarios' => $usuarios,
    ]);
});

Route::get('herramientas', [HerramientaController::class, 'index']);
