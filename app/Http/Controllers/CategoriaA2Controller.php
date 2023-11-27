<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Aprendices;

use App\Models\Instructores;

class CategoriaA2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nombreCategoria = 'Categoría A2';     
        $aprendices = User::select('name','lastname','email','tipodocumento','numerodocumento','fechanacimiento','contacto','aprendices.Id_aprendiz')
            ->join('aprendices', 'users.id', '=', 'aprendices.iduser')
            ->join('categorias', 'aprendices.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('users.rol', 'Aprendiz')
            ->get();
        $instructores = User::select('name','lastname','email','tipodocumento','numerodocumento','fechanacimiento','contacto','instructores.Id_instructor')
            ->join('instructores', 'users.id', '=', 'instructores.iduser')
            ->join('categorias', 'instructores.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('users.rol', 'Instructor')
            ->get();

        return view('Administrador/categorias.categoriaa2', ['aprendices'=>$aprendices,'instructores'=>$instructores]);
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
        $aprendices = Aprendices::findOrFail($id);
        $aprendices->delete();
        return redirect()->route('dashboard');
    }

    public function destroyIns(string $id)
    {
        $instructores = Instructores::findOrFail($id);
        $instructores->delete();
        return redirect()->route('dashboard');
    }
}
