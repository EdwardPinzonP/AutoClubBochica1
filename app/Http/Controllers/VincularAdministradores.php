<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asesores;

use App\Models\User;

use App\Models\Categorias;

class VincularAdministradores extends Controller
{
    public function create()
    {
        $administrador = User::where('rol','Administrador')->get();
        $categorias = Categorias::all();
        return view('Administrador.vincularAdministradores', ['administrador' => $administrador, 'categorias' => $categorias]);
    }

    public function store(Request $request)
    {
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
}
