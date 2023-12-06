<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ParticipantesB1Controller extends Controller
{
    public function index()
    {
        $nombreCategoria = 'Categoría B1';     
        $aprendices = User::select('name','lastname','email','tipodocumento','numerodocumento','fechanacimiento','contacto','aprendices.Id_aprendiz')
            ->join('aprendices', 'users.id', '=', 'aprendices.iduser')
            ->join('categorias', 'aprendices.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('users.rol', 'Aprendiz')
            ->get();

        return view('instructores.participantesB1', ['aprendices'=>$aprendices]);
    }
}
