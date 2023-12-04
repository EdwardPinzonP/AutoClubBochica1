<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\EvidenciasRespondidas;

class CalificacionesA2Controller extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $evidenciasCalificadas = EvidenciasRespondidas::with('evidencia')
            ->whereNotNull('nota')
            ->where('Id_aprendiz', auth()->user()->id)
            ->get();

        return view('aprendices.calificacionesa2', ['evidenciasCalificadas' => $evidenciasCalificadas]);
    }
}
