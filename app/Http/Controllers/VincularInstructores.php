<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Instructores;

use App\Models\Categorias;

class VincularInstructores extends Controller
{
    public function create()
    {
        $instructor = User::where('rol','Instructor')->get();
        $categorias = Categorias::all();
        return view('Administrador.vincularInstructores', ['instructor' => $instructor, 'categorias' => $categorias]);
    }

    public function store(Request $request)
    {
        //
        $instructor = Instructores::create([
            'Id_categoria' => $request->input('Id_categoria'),
            'iduser' => $request->input('iduser'),
        ]);
        
        if ($instructor) {
            return redirect()->route('dashboard')->with('success', 'Asociación creada correctamente');
        } else {
            return redirect()->back()->with('error', 'Error al crear la asociación');
        }
    }
}
