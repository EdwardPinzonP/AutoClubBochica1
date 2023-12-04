<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aorendices;

use App\Models\User;

class CompañerosA2Controller extends Controller
{
    public function index()
    {
        $nombreCategoria = 'Categoría A2';     
        $aprendices = User::select('name','lastname','email','tipodocumento','numerodocumento','fechanacimiento','contacto','aprendices.Id_aprendiz')
            ->join('aprendices', 'users.id', '=', 'aprendices.iduser')
            ->join('categorias', 'aprendices.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('users.rol', 'Aprendiz')
            ->get();
        $instructores = User::select('name','lastname','email','tipodocumento','numerodocumento','fechanacimiento','contacto','instructores.Id_instructor')
            ->join('instructores', 'users.id', '=', 'instructores.iduser')
            ->join('categorias', 'instructores.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('users.rol', 'Instructor')
            ->get();

        return view('aprendices.compañerosA2', ['aprendices'=>$aprendices,'instructores'=>$instructores]);
    }
}
