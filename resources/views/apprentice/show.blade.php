@extends('layouts.app')

{{-- Esta vista muestra los detalles de un aprendiz específico --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

{{-- Contenedor principal con margen vertical --}}
<div class="container my-5">
    {{-- Título de la página con color verde de éxito --}}
    <h2 class="mb-4 text-success">Detalles del Aprendiz</h2>

    {{-- Tabla responsive para mostrar los detalles --}}
    <div class="table-responsive">
        {{-- Tabla con bordes y efecto hover --}}
        <table class="table table-bordered border-primary table-hover">
            {{-- Encabezado de la tabla --}}
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead>
            {{-- Cuerpo de la tabla con los datos del aprendiz --}}
            <tbody>
                <tr>
                    {{-- Muestra los datos del aprendiz usando la sintaxis de Blade --}}
                    <td>{{ $apprentice['id'] }}</td>
                    <td>{{ $apprentice['name'] }}</td>
                    <td>{{ $apprentice['email'] }}</td>
                    <td>{{ $apprentice['cell_number'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
