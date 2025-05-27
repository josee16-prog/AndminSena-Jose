@extends('layouts.app')

{{-- Vista para editar un profesor existente --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Contenedor principal con margen superior --}}
    <div class="container mt-5">
        {{-- Título del formulario --}}
        <h1 class="mb-4">Actualizar Profesor</h1>

        {{-- Tarjeta con sombra suave para el formulario --}}
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Formulario para actualizar el profesor --}}
                <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                    {{-- Token CSRF para protección contra ataques cross-site --}}
                    @csrf
                    {{-- Método PUT para actualización (HTML solo soporta GET/POST) --}}
                    @method('PUT')

                    {{-- Campos para editar la información del profesor --}}
                    <div class="mb-3">
                        {{-- Campo para el nombre del profesor --}}
                        <label for="name" class="form-label">Nombre del Profesor</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $teacher->name) }}" placeholder="Ingrese el nombre del profesor">
                        {{-- Campo para el email del profesor --}}
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $teacher->email) }}" placeholder="Ingrese el email del profesor">
                    </div>

                    {{-- Botón para enviar el formulario --}}
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Profesor
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
