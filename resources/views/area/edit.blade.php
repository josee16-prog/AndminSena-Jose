@extends('layouts.app')

{{-- Vista para editar un área existente --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Contenedor principal con margen superior --}}
    <div class="container mt-5">
        {{-- Título del formulario --}}
        <h1 class="mb-4">Actualizar Area</h1>

        {{-- Tarjeta con sombra suave para el formulario --}}
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Formulario para actualizar el área --}}
                <form action="{{ route('area.update', $area->id) }}" method="POST">
                    {{-- Token CSRF para protección contra ataques cross-site --}}
                    @csrf
                    {{-- Método PUT para actualización (HTML solo soporta GET/POST) --}}
                    @method('PUT')

                    {{-- Campo para el nombre del área --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre de la Area</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $area->name) }}" placeholder="">
                    </div>

                    {{-- Botón para enviar el formulario --}}
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Area
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
