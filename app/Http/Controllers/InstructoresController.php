<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InstructoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $instructores = User::where('rol', 'Instructor')->get();
        return view('Administrador.listadoInstructores', ['instructores' => $instructores]);
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
        $instructores = User::findOrFail($id);
        return view('instructores/edit',['instructores'=>$instructores]);
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $id)
        {
            $instructores = User::findOrFail($id);
            $instructores->update([
                'name' => request('nombres'),
                'lastname' => request('apellidos'),
                'contacto' => request('contacto'),
                'fechanacimiento' => request('fechanacimiento'),
                'TipoDocumento' => request('tipodocumento'),
                'NumeroDocumento' => request('numerodocumento')
            ]);

            return redirect()->route('instructores.index');
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
