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
<<<<<<< HEAD
    $cantidadinstructores = Instructores::where('iduser', $id)->count();

    if ($cantidadinstructores > 0) {
        $instructores = Instructores::where('iduser', $id)->first();

        $instructores->iduser = $request->input('codigo');
        $instructores->Nombres = $request->input('nombres');
        $instructores->Apellidos = $request->input('apellidos');
        $instructores->Contacto = $request->input('contacto');
        $instructores->TipoDocumento = $request->input('tipodocumento');
        $instructores->NumeroDocumento = $request->input('numerodocumento');
        $instructores->FechaNacimiento = $request->input('fechanacimiento');
        $instructores->Correo = $request->input('correo');
        $instructores->save();
    } else {
        Instructores::create([
            'iduser' => $request->input('codigo'),
            'Nombres' => $request->input('nombres'),
            'Apellidos' => $request->input('apellidos'),
            'Contacto' => $request->input('contacto'),
            'TipoDocumento' => $request->input('tipodocumento'),
            'NumeroDocumento' => $request->input('numerodocumento'),
            'FechaNacimiento' => $request->input('fechanacimiento'),
            'Correo' => $request->input('correo'),
        ]);
=======
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
>>>>>>> d955ad5d951e6f213250548a04193c1c9f88a39f
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
