@extends('layouts.app')

{{-- Vista para mostrar los detalles de un curso específico --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

{{-- Contenedor principal con margen vertical --}}
<div class="container my-5">
    {{-- Título de la página --}}
    <h1>Detalles del Curso</h1>

    {{-- Tabla responsive para mostrar los detalles --}}
    <div class="table-responsive">
        {{-- Tabla con bordes y efecto hover --}}
        <table class="table table-bordered border-primary table-hover">
            {{-- Encabezado de la tabla --}}
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Número del curso</th>
                    <th scope="col">Día</th>
                </tr>
            </thead>
            {{-- Cuerpo de la tabla con los datos del curso --}}
            <tbody>
                <tr>
                    {{-- Muestra los datos del curso usando la sintaxis de Blade --}}
                    <td>{{ $course['id'] }}</td>
                    <td>{{ $course['course_number'] }}</td>
                    <td>{{ $course['day'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
