<?php

namespace App\Http\Controllers;

use App\Models\CategoriaC1Aprendices;
use Illuminate\Http\Request;

class CategoriaC1AprendicesController extends Controller
{
    public function index()
    {
        return view('aprendices.categoriac1');
    }
}
