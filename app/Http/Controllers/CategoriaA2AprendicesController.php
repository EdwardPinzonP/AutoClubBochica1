<?php

namespace App\Http\Controllers;

use App\Models\CategoriaA2Aprendices;
use Illuminate\Http\Request;

class CategoriaA2AprendicesController extends Controller
{
    public function index()
    {

        return view ('aprendices.categoriaA2');
    }
}
