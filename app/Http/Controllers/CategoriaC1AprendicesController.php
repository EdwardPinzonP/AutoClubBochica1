<?php

namespace App\Http\Controllers;

use App\Models\CategoriaC1Aprendices;
use Illuminate\Http\Request;

class CategoriaC1AprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('aprendices.categoriac1');
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
    public function show(CategoriaC1Aprendices $categoriaC1Aprendices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaC1Aprendices $categoriaC1Aprendices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoriaC1Aprendices $categoriaC1Aprendices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaC1Aprendices $categoriaC1Aprendices)
    {
        //
    }
}
