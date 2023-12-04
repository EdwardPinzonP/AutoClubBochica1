<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evidencias;

use App\Models\EvidenciasRespondidas;

class ResponderA2Controller extends Controller
{
    public function create()
    {
        $evidencias = Evidencias::select('Id_evidencia','descripcion')->get();
        return view('aprendices.responderA2', ['evidencias'=>$evidencias]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
    
        $request->validate([
            'Id_evidencia' => 'required',
            'adjunto' => 'required|file',
        ]);
    
        if ($request->hasFile('adjunto')) {
            $adjunto = $request->file('adjunto');
            $rutaAdjunto = $adjunto->store('archivos', 'public');
        } else {
            return redirect()->back()->with('error', 'Debes adjuntar un archivo.');
        }
    
        EvidenciasRespondidas::create([
            'Id_aprendiz' => $user->id,
            'Id_evidencia' => $request->input('Id_evidencia'),
            'adjunto' => $rutaAdjunto,
            'nota' => $request->input('nota'),
        ]);
    
        return redirect()->route('evidencias.categoriaA2');
    }
}
