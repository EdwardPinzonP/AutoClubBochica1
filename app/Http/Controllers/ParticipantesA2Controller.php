<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ParticipantesA2Controller extends Controller
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

        return view('instructores.participantesA2', ['aprendices'=>$aprendices]);
    }
}
