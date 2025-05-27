@extends('layouts.app')

{{-- Vista para mostrar los detalles de un profesor específico --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

{{-- Contenedor principal con margen vertical --}}
<div class="container my-5">
    {{-- Título de la página --}}
    <h1>Detalles del Profesor</h1>

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
                </tr>
            </thead>
            {{-- Cuerpo de la tabla con los datos del profesor --}}
            <tbody>
                <tr>
                    {{-- Muestra los datos del profesor usando la sintaxis de Blade --}}
                    <td>{{ $teacher['id'] }}</td>
                    <td>{{ $teacher['name'] }}</td>
                    <td>{{ $teacher['email'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
