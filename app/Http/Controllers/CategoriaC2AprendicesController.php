<?php

namespace App\Http\Controllers;

use App\Models\CategoriaC2Aprendices;
use Illuminate\Http\Request;

class CategoriaC2AprendicesController extends Controller
{
    public function index()
    {
        return view('aprendices.categoriac2');
    }
}
