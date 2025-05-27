@extends('layouts.app')

{{-- Vista para crear una nueva área --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Título del formulario --}}
    <h1>Formulario de Area</h1>

    {{-- Formulario para crear una nueva área --}}
    <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">
        {{-- Token CSRF para protección contra ataques cross-site --}}
        @csrf

        {{-- Campo para el nombre del área --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del área">
        </div>

        {{-- Botón para enviar el formulario --}}
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
