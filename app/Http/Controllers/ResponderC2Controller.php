<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evidencias;

use App\Models\EvidenciasRespondidas;

class ResponderC2Controller extends Controller
{
    public function create()
    {
        $evidencias = Evidencias::select('Id_evidencia', 'descripcion')
            ->where('Id_categoria', 4)
            ->get();
    
        return view('aprendices.responderC2', ['evidencias' => $evidencias]);
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
            'iduser' => $user->id,
            'Id_evidencia' => $request->input('Id_evidencia'),
            'adjunto' => $rutaAdjunto,
            'nota' => $request->input('nota'),
        ]);  

        return redirect()->route('evidencias.categoriaC2');
    }
}
