@extends('layouts.app')

{{-- Esta vista permite editar los datos de un aprendiz existente --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Contenedor principal con margen superior --}}
    <div class="container mt-5">
        {{-- Título del formulario de edición --}}
        <h1 class="mb-4">Actualizar Aprendiz</h1>

        {{-- Tarjeta con sombra suave para el formulario --}}
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Formulario que envía los datos actualizados mediante PUT --}}
                <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                    {{-- Token CSRF para protección contra ataques cross-site --}}
                    @csrf
                    {{-- Método PUT para actualización (HTML solo soporta GET/POST) --}}
                    @method('PUT')

                    {{-- Campos del formulario con valores actuales del aprendiz --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre de el aprendiz</label>
                        {{-- old() helper mantiene los datos en caso de error de validación --}}
                        <input type="text"name="name"id="name"value="{{ old('name', $apprentice->name) }}" placeholder="Enter name">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $apprentice->email) }}" placeholder="Enter email">
                        <label for="cell_number" class="form-label">Celular</label>
                        <input type="number" id="cell_number" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number) }}" placeholder="Enter cell number">
                    </div>

                    {{-- Botón para enviar el formulario con ícono --}}
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Aprendiz
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
