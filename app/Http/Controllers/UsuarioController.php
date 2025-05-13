<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $usuarios = Usuario::all();

        return response($usuarios);
    }

    public function latest() {
        // $usuarios = Usuario::latest()->first();
        $usuario = Usuario::orderBy('ultima_consulta', 'desc')->first();

        return response($usuario);
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
    public function show(Request $reques) 
    {
        //
        $usuario = Usuario::where('contrasena', $reques->contrasena)->first();
        // $usuario = Usuario::find($reques->contrasena);

        // dd($usuario);

        if (is_null($usuario)) {
            return response()->json([
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        // dd($usuario);

        // return response()->json([
        //     'message' => 'Usuario encontrado',
        //     'usuario' => $usuario,
        // ], 200);
        // return response()->json($usuario, 200);
        // dd(this.$ultimoUsuario);

        $usuario->ultima_consulta = now();
        $usuario->save();

        return response()->json($usuario, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
