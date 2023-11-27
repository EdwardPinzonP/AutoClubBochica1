<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aprendices;
use App\Models\Categorias;

class AprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aprendices = Aprendices::with('user:id,name,lastname,email,tipodocumento,numerodocumento,fechanacimiento,contacto')
        ->with('categoria:Id_categoria,Nombre')
        ->get(['Id_aprendiz', 'Id_categoria', 'iduser']);

        return view('Administrador.listadoAprendices', ['aprendices' => $aprendices]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aprendices = User::findOrFail($id);
        return view('aprendices.edit', ['aprendices' => $aprendices]);
    }


    /**
     * Update the specified resource in storage.
     */

// ...

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




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
