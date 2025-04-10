<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $herramientas = Herramienta::all();

        return response()->json($herramientas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'cantidad_total' => 'required|integer',
            'cantidad_en_casillero' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $nuevaHerramienta = Herramienta::create([
            'nombre' => $request->input('nombre'),
            'cantidad_total' => $request->input('cantidad_total'),
            'cantidad_en_casillero' => $request->input('cantidad_en_casillero'),
        ]);

        return response()->json($nuevaHerramienta, 201);
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
    public function show(Herramienta $herramienta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Herramienta $herramienta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Herramienta $herramienta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Herramienta $herramienta)
    {
        //
    }
}
