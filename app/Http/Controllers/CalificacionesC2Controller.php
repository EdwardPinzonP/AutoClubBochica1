<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\EvidenciasRespondidas;

class CalificacionesC2Controller extends Controller
{
    public function index()
    {
        $user = auth()->user();
    
        $evidenciasCalificadas = EvidenciasRespondidas::with('evidencia')
            ->where('iduser', $user->id)
            ->whereNotNull('nota')
            ->whereHas('evidencia', function ($query) {
                $query->where('Id_categoria', 4);
            })
            ->get();
        
        return view('aprendices.calificacionesc2', ['evidenciasCalificadas' => $evidenciasCalificadas]);
    }
    
}
