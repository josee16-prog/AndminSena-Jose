@extends('layouts.app')

{{-- Vista para mostrar los detalles de un área específica --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

{{-- Contenedor principal con margen vertical --}}
<div class="container my-5">
    {{-- Título de la página --}}
    <h2 class="mb-4 text-success">Detalles de Area</h2>

    {{-- Tabla responsive para mostrar los detalles --}}
    <div class="table-responsive">
        {{-- Tabla con bordes y efecto hover --}}
        <table class="table table-bordered border-primary table-hover">
            {{-- Encabezado de la tabla --}}
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            {{-- Cuerpo de la tabla con los datos del área --}}
            <tbody>
                <tr>
                    {{-- Muestra los datos del área usando la sintaxis de Blade --}}
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['name'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
