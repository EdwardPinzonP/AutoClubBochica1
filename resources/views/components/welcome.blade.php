@if (Auth::user()->rol == "Aprendiz")
    @php($vista = 'aprendiz')
@elseif(Auth::user()->rol=="Administrador")
    @php($vista = 'Admin')
@elseif(Auth::user()->rol=="Instructor")
<div class="instr">Hola Instructor {{ Auth::user()->name }}</div>
    @php($vista = 'instructor')
@endif
@extends('layouts.'.$vista)
