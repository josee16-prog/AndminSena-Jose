@extends('layouts.app')

{{-- Vista para crear un nuevo computador --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título del formulario --}}
    <h1>Formulario de Computers</h1>

    {{-- Formulario para crear un nuevo computador --}}
    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
        {{-- Token CSRF para protección contra ataques cross-site --}}
        @csrf

        {{-- Campo para el número del computador --}}
        <div class="mb-3">
            <label for="number" class="form-label">Número</label>
            <input type="number" class="form-control" id="number" name="number" placeholder="Enter course number">
        </div>

        {{-- Campo para la marca del computador --}}
        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand">
        </div>

        {{-- Botón para enviar el formulario --}}
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
