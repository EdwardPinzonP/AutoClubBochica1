<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asesores;

use App\Models\User;

use App\Models\Categorias;

class VincularAdministradores extends Controller
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
    public function create()
    {
        //
        $administrador = User::where('rol','Administrador')->get();
        $categorias = Categorias::all();
        return view('Administrador.vincularAdministradores', ['administrador' => $administrador, 'categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $administrador = Asesores::create([
            'Id_categoria' => $request->input('Id_categoria'),
            'iduser' => $request->input('iduser'),
        ]);
        
        if ($administrador) {
            return redirect()->route('dashboard')->with('success', 'Asociación creada correctamente');
        } else {
            return redirect()->back()->with('error', 'Error al crear la asociación');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
