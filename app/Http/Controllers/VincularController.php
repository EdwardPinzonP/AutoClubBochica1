<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorias;

use App\Models\Aprendices;

use App\Models\User;

class VincularController extends Controller
{
    public function create()
    {
        $agregar = User::where('rol','Aprendiz')->get();
        $categorias = Categorias::all();
        return view('Administrador.vincularAprendices', ['agregar' => $agregar, 'categorias' => $categorias]);
    }

    public function store(Request $request)
    {
        $aprendiz = Aprendices::create([
            'Id_categoria' => $request->input('Id_categoria'),
            'iduser' => $request->input('iduser'),
        ]);
        
        if ($aprendiz) {
            return redirect()->route('dashboard')->with('success', 'Asociación creada correctamente');
        } else {
            return redirect()->back()->with('error', 'Error al crear la asociación');
        }
        
    }
}
