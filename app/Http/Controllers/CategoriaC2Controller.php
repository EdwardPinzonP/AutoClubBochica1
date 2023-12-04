<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Aprendices;


class CategoriaC2Controller extends Controller
{
    public function index()
    {
        $nombreCategoria = 'Categoría C2';     
        $aprendices = User::select('name','lastname','email','tipodocumento','numerodocumento','fechanacimiento','contacto','aprendices.Id_aprendiz')
            ->join('aprendices', 'users.id', '=', 'aprendices.iduser')
            ->join('categorias', 'aprendices.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('users.rol', 'Aprendiz')
            ->get();
        $instructores = User::select('name','lastname','email','tipodocumento','numerodocumento','fechanacimiento','contacto','instructores.Id_instructor')
            ->join('instructores', 'users.id', '=', 'instructores.iduser')
            ->join('categorias', 'instructores.Id_categoria', '=', 'categorias.Id_categoria')
            ->where('categorias.Nombre', $nombreCategoria)
            ->where('users.rol', 'Instructor')
            ->get();

            return view('Administrador/categorias.categoriaa2', ['aprendices'=>$aprendices,'instructores'=>$instructores]);
    }

    public function destroy(string $id)
    {
        $aprendices = Aprendices::findOrFail($id);
        $aprendices->delete();
        return redirect()->route('dashboard');

    }

    public function destroyIns(string $id)
    {
        $instructores = Instructores::findOrFail($id);
        $instructores->delete();
        return redirect()->route('dashboard');
    }
}
