<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        
        $validator = Validator::make($request->all(), [
            'id_usuario' => 'required|integer',
            'id_herramienta' => 'required|integer',
            'cantidad_herramientas' => 'required|integer',
            'tipo_movimiento' => 'required|string',
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Error de validación',
                'errors' => $validator->errors(),
            ], 422);
        }

        $movimiento = Movimiento::create([
            'id_usuario' => $request->id_usuario,
            'id_herramienta' => $request->id_herramienta,
            'cantidad_herramientas' => $request->cantidad_herramientas,
            'tipo_movimiento' => $request->tipo_movimiento,
        ]);
        return response()->json([
            'message' => 'Movimiento creado exitosamente',
            'movimiento' => $movimiento,
        ], 201);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movimiento $movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movimiento $movimiento)
    {
        //
    }
}
