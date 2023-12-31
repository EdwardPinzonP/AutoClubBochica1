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
            ->where('iduser', $user->id)
            ->whereNotNull('nota')
            ->whereHas('evidencia', function ($query) {
                $query->where('Id_categoria', 1);
            })
            ->get();
        
        return view('aprendices.calificacionesa2', ['evidenciasCalificadas' => $evidenciasCalificadas]);
    }
}
