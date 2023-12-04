@if (Auth::user()->rol == "Aprendiz")
    @php($vista = 'aprendiz')
@elseif(Auth::user()->rol=="Administrador")
    @php($vista = 'Admin')
@elseif(Auth::user()->rol=="Instructor")
    @php($vista = 'instructor')
@endif
@extends('layouts.'.$vista)
