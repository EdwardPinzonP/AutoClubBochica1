<?php

namespace App\Http\Controllers;

use App\Models\CategoriaB1Aprendices;
use Illuminate\Http\Request;

class CategoriaB1AprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('aprendices.categoriab1');
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
    public function show(CategoriaB1Aprendices $categoriaB1Aprendices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaB1Aprendices $categoriaB1Aprendices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoriaB1Aprendices $categoriaB1Aprendices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaB1Aprendices $categoriaB1Aprendices)
    {
        //
    }
}
