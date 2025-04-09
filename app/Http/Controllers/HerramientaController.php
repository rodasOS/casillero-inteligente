<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $herramientas = Herramienta::all();

        return view('home', [
            'herramientas' => $herramientas,
        ]);

        // return response()->json($herramientas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
