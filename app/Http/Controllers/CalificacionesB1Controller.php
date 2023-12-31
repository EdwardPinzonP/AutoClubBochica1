<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\EvidenciasRespondidas;

class CalificacionesB1Controller extends Controller
{
    public function index()
    {
        $user = auth()->user();
    
        $evidenciasCalificadas = EvidenciasRespondidas::with('evidencia')
            ->where('iduser', $user->id)
            ->whereNotNull('nota')
            ->whereHas('evidencia', function ($query) {
                $query->where('Id_categoria', 2);
            })
            ->get();
        
        return view('aprendices.calificacionesb1', ['evidenciasCalificadas' => $evidenciasCalificadas]);
    }
}
