<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function index()
    {
        return view('inscripcion.enviarcorreo');
    }
}
