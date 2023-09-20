<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructores;

class InstructoresController extends Controller
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
        $cantidadinstructores = Instructores::where('iduser','=',$id)->count();
        if($cantidadinstructores>0){
            $instructores = Instructores::where('iduser','=',$id)->get();
            return view('instructores/edit',['instructores'=>$instructores])->with('emp',$cantidadinstructores);
        }
        else{
            return view('instructores/edit')->with('emp',$cantidadinstructores);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cantidadinstructores = Instructores::where('iduser','=', $id)->count();
        if($cantidadinstructores>0){
            $instructores = Instructores::where('iduser','=', $id);
            $instructores->update([
                'iduser'=>request('codigo'),
                'Nombres'=>request('nombres'),
                'Apellidos'=>request('apellidos'),
                'Contacto'=>request('contacto'),
                'TipoDocumento'=>request('tipodocumento'),
                'NumeroDocumento'=>request('numerodocumento'),
                'FechaNacimiento'=>request('fechanacimiento'),
                'Correo'=>request('correo')
            ]);
        }
        else{
            Instructores::create([
                'iduser'=>request('codigo'),
                'Nombres'=>request('nombres'),
                'Apellidos'=>request('apellidos'),
                'Contacto'=>request('contacto'),
                'TipoDocumento'=>request('tipodocumento'),
                'NumeroDocumento'=>request('numerodocumento'),
                'FechaNacimiento'=>request('fechanacimiento'),
                'Correo'=>request('correo')
            ]);
        }
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
