<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Storage;

use App\Models\EvidenciasRespondidas;

class EvidenciasAprendicesB1Controller extends Controller
{
    public function index()
    {
        $evidenciasAsignadas = EvidenciasRespondidas::
        join('categorias', 'evidencias_respondidas.Id_categoria', '=', 'categorias.Id_categoria')
        ->join('users', 'evidencias_respondidas.iduser', '=', 'users.id')
        ->join('evidencias', 'evidencias_respondidas.Id_evidencia', '=', 'evidencias.Id_evidencia')
        ->select('evidencias_respondidas.*', 'users.*', 'evidencias.*')
        ->where('categorias.Id_categoria', 2)
        ->get(); 
    
        return view('instructores.evidenciasAprenb1', ['evidenciasAsignadas' => $evidenciasAsignadas]);
    
    }

    public function edit(string $id)
    {
        $evidencias = EvidenciasRespondidas::findOrFail($id);
        return view('instructores.calificarB1', ['evidencias'=>$evidencias]);
    }

    public function update(Request $request, string $id)
    {
        $evidencias = EvidenciasRespondidas::findOrFail($id);
        $evidencias->update([
            'nota' => $request->input('nota'),
        ]);

        return redirect()->route('evidenciasaprenb1');

    }

    public function descargar($id)
    {
    $evidencia = EvidenciasRespondidas::findOrFail($id);

    if (Storage::disk('public')->exists($evidencia->adjunto)) {
        $filePath = storage_path('app/public/' . $evidencia->adjunto);

        $originalFileName = pathinfo($filePath, PATHINFO_BASENAME);

        return response()->download($filePath, $originalFileName);
    } else {
        return 'El archivo no existe';
    }
    }
}
