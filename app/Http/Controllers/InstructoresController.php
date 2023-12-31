<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instructores;

class InstructoresController extends Controller
{
    public function index()
    {
        $instructores = Instructores::with('user:id,name,lastname,email,tipodocumento,numerodocumento,fechanacimiento,contacto')
        ->with('categoria:Id_categoria,Nombre')
        ->get(['Id_instructor', 'Id_categoria', 'iduser']);

        return view('Administrador.listadoInstructores', ['instructores' => $instructores]);
    }

    public function edit(string $id)
    {
        $instructores = User::findOrFail($id);
        return view('instructores/edit',['instructores'=>$instructores]);
    }

    public function update(Request $request, string $id)
    {
        $instructores = User::findOrFail($id);
        $instructores->update([
            'name' => $request->input('nombres'),
            'lastname' => $request->input('apellidos'),
            'contacto' => $request->input('contacto'),
            'fechanacimiento' => $request->input('fechanacimiento'),
            'tipodocumento' => $request->input('tipodocumento'),
            'numerodocumento' => $request->input('numerodocumento')
        ]);
        
        return redirect()->route('instructores.index');
    }

    public function buscarInstructor(Request $request)
    {
        $numero_documento = $request->input('numero_documento');
        
        $instructores = Instructores::with('user', 'categoria')
            ->whereHas('user', function ($query) use ($numero_documento) {
                $query->where('numerodocumento', 'LIKE', '%' . $numero_documento . '%');
            })
            ->get();
        
        return view('Administrador.listadoInstructores', ['instructores' => $instructores]);
    }
}
