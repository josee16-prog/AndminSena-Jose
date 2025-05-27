@extends('layouts.app')

{{-- Vista para mostrar los detalles de un centro de formación específico --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

{{-- Contenedor principal con margen vertical --}}
<div class="container my-5">
    {{-- Título de la página --}}
    <h1>Detalles del Centro de Formación</h1>

    {{-- Tabla responsive para mostrar los detalles --}}
    <div class="table-responsive">
        {{-- Tabla con bordes y efecto hover --}}
        <table class="table table-bordered border-primary table-hover">
            {{-- Encabezado de la tabla --}}
            <thead class="table-primary border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicación</th>
                </tr>
            </thead>
            {{-- Cuerpo de la tabla con los datos del centro --}}
            <tbody>
                <tr>
                    {{-- Muestra los datos del centro usando la sintaxis de Blade --}}
                    <td>{{ $trainingcenter['id'] }}</td>
                    <td>{{ $trainingcenter['name'] }}</td>
                    <td>{{ $trainingcenter['location'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
