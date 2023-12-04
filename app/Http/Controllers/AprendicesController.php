<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aprendices;
use App\Models\Categorias;

class AprendicesController extends Controller
{
    public function index()
    {
        $aprendices = Aprendices::with('user:id,name,lastname,email,tipodocumento,numerodocumento,fechanacimiento,contacto')
        ->with('categoria:Id_categoria,Nombre')
        ->get(['Id_aprendiz', 'Id_categoria', 'iduser']);

        return view('Administrador.listadoAprendices', ['aprendices' => $aprendices]);

    }
    public function edit(string $id)
    {
        $aprendices = User::findOrFail($id);
        return view('aprendices.edit', ['aprendices' => $aprendices]);
    }

    public function update(Request $request, string $id)
    {
        $aprendices = User::findOrFail($id);
        $aprendices->update([
            'name' => request('nombres'),
            'lastname' => request('apellidos'),
            'contacto' => request('contacto'),
            'fechanacimiento' => request('fechanacimiento'),
            'tipodocumento' => request('tipodocumento'),
            'numerodocumento' => request('numerodocumento')
        ]);

        return redirect()->route('aprendices.index');
    }

    public function buscarAprendiz(Request $request)
    {
        $numero_documento = $request->input('numero_documento');
        
        $aprendices = Aprendices::with('user', 'categoria')
            ->whereHas('user', function ($query) use ($numero_documento) {
                $query->where('numerodocumento', 'LIKE', '%' . $numero_documento . '%');
            })
            ->get();
        
        return view('Administrador.listadoAprendices', ['aprendices' => $aprendices]);
    }
}
