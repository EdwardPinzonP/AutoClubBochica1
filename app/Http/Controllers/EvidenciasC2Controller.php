<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Categorias;

use App\Models\Evidencias;

class EvidenciasC2Controller extends Controller
{
    public function index()
    {
        $nombreCategoria = 'Categoría C2';     
        $idInstructor = auth()->user()->id;
        
        $evidencias = User::select('name','lastname','evidencias.Id_evidencia','categorias.Nombre','evidencias.fechahora','evidencias.descripcion')
            ->join('evidencias', 'users.id', '=', 'evidencias.iduser')
            ->join('categorias', 'evidencias.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('evidencias.iduser', $idInstructor)
            ->get();
        
        return view('instructores.evidenciasc2', ['evidencias' => $evidencias]);
        
    }
}
