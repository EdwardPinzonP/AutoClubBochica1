<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\EvidenciasRespondidas;

use App\Models\Evidencias;

class EvidenciasA2AprendicesController extends Controller
{
    public function index()
    {
        $nombreCategoria = 'Categoría A2';     
        
        $evidencias = User::select('name','lastname','evidencias.Id_evidencia','categorias.Nombre','evidencias.fechahora','evidencias.descripcion')
            ->join('evidencias', 'users.id', '=', 'evidencias.iduser')
            ->join('categorias', 'evidencias.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->get();
  
        return view('aprendices.evidenciasa2', ['evidencias' => $evidencias]);
    }
}
