<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Instructores;

use App\Models\Categorias;

use App\Models\Evidencias;

class CategoriaC2InstructoresController extends Controller
{
    public function create()
    {
        $instructor = User::where('rol','Instructor')->get();
        $categorias = Categorias::all();
        return view('instructores.agregarEvidenciac2', ['instructor' => $instructor, 'categorias' => $categorias]);
    }

    public function store(Request $request)
    {
        $user = Auth()->user();
        $instructor = Evidencias::create([
            'iduser' => $user->id,
            'Id_categoria' => 4,
            'fechahora' => now(),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect()->route('evidenciasC2');
    }

    public function edit(string $id)
    {
        $evidencias = Evidencias::findOrFail($id);
        return view('instructores.editarEvidenciac2', ['evidencias'=>$evidencias]);
    }

    public function update(Request $request, string $id)
    {
        $evidencias = Evidencias::findOrFail($id);
        $evidencias->update([
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect()->route('evidenciasC2');
    }
}
