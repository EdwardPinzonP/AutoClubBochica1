<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class CrearUsuariosController extends Controller
{
    public function create()
    {
        return view('Administrador.AgregarUsuario');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'tipodocumento' => 'required|string|max:255',
            'numerodocumento' => 'required|string|max:255',
            'fechanacimiento' => 'required|date',
            'contacto' => 'required|string|max:255',
            'rol' => 'required|string|max:255',
        ]);
    
        $user = User::create([
            'name' => $validatedData['name'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'tipodocumento' => $validatedData['tipodocumento'],
            'numerodocumento' => $validatedData['numerodocumento'],
            'fechanacimiento' => $validatedData['fechanacimiento'],
            'contacto' => $validatedData['contacto'],
            'rol' => $validatedData['rol'],
        ]);
    
        return redirect()->route('dashboard');
    }
}
