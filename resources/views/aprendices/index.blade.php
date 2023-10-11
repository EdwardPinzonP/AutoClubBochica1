@extends('layouts.plantillabase');

@section('contenido')

<h1>Vista INDEX</h1>

<table class="table table-dark table-striped mt-4">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Id Aprendiz</th>
            <th scope="col">Id Acudiente</th>
            <th scope="col">Id Categoría</th>
            <th scope="col">Id Curso</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Contacto</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Correo</th>
            <th scope="col">Tipo Documento</th>
            <th scope="col">Numero Documento</th>
        </tr>
    </thead>
</table>

@endsection