<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\EvidenciasRespondidas;

class EvidenciasAprendicesC1Controller extends Controller
{

    public function index()
    {

        $evidenciasAsignadas = EvidenciasRespondidas::join('aprendices', 'evidencias_respondidas.Id_aprendiz', '=', 'aprendices.Id_aprendiz')
        ->join('users', 'aprendices.iduser', '=', 'users.id')
        ->join('evidencias','evidencias_respondidas.Id_evidencia', '=', 'evidencias.Id_evidencia')
        ->join('categorias', 'aprendices.Id_categoria', '=', 'categorias.Id_categoria')
        ->select('evidencias_respondidas.*', 'aprendices.*', 'users.*', 'evidencias.*','categorias.*')
        ->where('aprendices.Id_categoria', '=',3)
        ->get();
        return view('instructores.evidenciasAprenc1', ['evidenciasAsignadas' => $evidenciasAsignadas]);
    }

    public function edit(string $id)
    {
        //
        $evidencias = EvidenciasRespondidas::findOrFail($id);
        return view('instructores.calificarC1', ['evidencias'=>$evidencias]);
    }

    public function update(Request $request, string $id)
    {
        //
        $evidencias = EvidenciasRespondidas::findOrFail($id);
        $evidencias->update([
            'nota' => $request->input('nota'),
        ]);

        return redirect()->route('evidenciasaprenc1');

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