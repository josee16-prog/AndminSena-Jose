@extends('layouts.app')

{{-- Vista para editar un centro de formación existente --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Contenedor principal con margen superior --}}
    <div class="container mt-5">
        {{-- Título del formulario --}}
        <h1 class="mb-4">Actualizar centro de formación</h1>

        {{-- Tarjeta con sombra suave para el formulario --}}
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Formulario para actualizar el centro de formación --}}
                <form action="{{ route('trainingcenter.update', $trainingcenter->id) }}" method="POST">
                    {{-- Token CSRF para protección contra ataques cross-site --}}
                    @csrf
                    {{-- Método PUT para actualización (HTML solo soporta GET/POST) --}}
                    @method('PUT')

                    {{-- Campos para editar la información del centro --}}
                    <div class="mb-3">
                        {{-- Campo para el nombre del centro --}}
                        <label for="name" class="form-label">Nombre del Centro</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $trainingcenter->name) }}" placeholder="Ingrese el nombre del centro">
                        {{-- Campo para la ubicación del centro --}}
                        <label for="location" class="form-label">Ubicación</label>
                        <input type="text" id="location" name="location" value="{{ old('location', $trainingcenter->location) }}" placeholder="Ingrese la ubicación del centro">
                    </div>

                    {{-- Botón para enviar el formulario --}}
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Centro
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
