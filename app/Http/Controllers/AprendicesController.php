<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Aprendices;
use App\Models\Categorias;
use App\Models\Cursos;

class AprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aprendices = DB::table('Aprendices')
        ->join('Categorias', 'Categorias.Id_categoria', '=', 'Aprendices.Id_categoria')
        ->join('Cursos', 'Cursos.Id_curso', '=', 'Aprendices.Id_curso')
        ->select('Aprendices.*')
        ->where('Categorias.Id_categoria', '=', 1)
        ->orderBy('Aprendices.Nombres','ASC')
        ->get();
        return view('aprendices.participantes', ['aprendices'=>$aprendices]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
