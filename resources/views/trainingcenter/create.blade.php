@extends('layouts.app')

{{-- Vista para crear un nuevo centro de formación --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Título del formulario --}}
    <h1>Formulario de centros de formación</h1>

    {{-- Formulario para crear un nuevo centro de formación --}}
    <form action="{{ route('trainingcenter.store') }}" method="POST" enctype="multipart/form-data">
        {{-- Token CSRF para protección contra ataques cross-site --}}
        @csrf

        {{-- Campo para el nombre del centro --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del centro">
        </div>

        {{-- Campo para la ubicación del centro --}}
        <div class="mb-3">
            <label for="location" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Ingrese la ubicación del centro">
        </div>

        {{-- Botón para enviar el formulario --}}
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
