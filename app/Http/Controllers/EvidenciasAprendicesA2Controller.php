<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\EvidenciasRespondidas;

class EvidenciasAprendicesA2Controller extends Controller
{

    public function index()
    {
        $evidenciasAsignadas = EvidenciasRespondidas::
        join('categorias', 'evidencias_respondidas.Id_categoria', '=', 'categorias.Id_categoria')
        ->join('users', 'evidencias_respondidas.iduser', '=', 'users.id')
        ->join('evidencias', 'evidencias_respondidas.Id_evidencia', '=', 'evidencias.Id_evidencia')
        ->select('evidencias_respondidas.*', 'users.*', 'evidencias.*')
        ->where('categorias.Id_categoria', 1)
        ->get();  

        return view('instructores.evidenciasAprena2', ['evidenciasAsignadas' => $evidenciasAsignadas]);
    }

    public function edit(string $id)
    {
        //
        $evidencias = EvidenciasRespondidas::findOrFail($id);
        return view('instructores.calificarA2', ['evidencias'=>$evidencias]);
    }

    public function update(Request $request, string $id)
    {
        //
        $evidencias = EvidenciasRespondidas::findOrFail($id);
        $evidencias->update([
            'nota' => $request->input('nota'),
        ]);

        return redirect()->route('evidenciasaprena2');

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
