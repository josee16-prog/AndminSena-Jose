@extends('layouts.app')

{{-- Vista para editar un computador existente --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Contenedor principal con margen superior --}}
    <div class="container mt-5">
        {{-- Título del formulario --}}
        <h1 class="mb-4">Actualizar Computador</h1>

        {{-- Tarjeta con sombra suave para el formulario --}}
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Formulario para actualizar el computador --}}
                <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                    {{-- Token CSRF para protección contra ataques cross-site --}}
                    @csrf
                    {{-- Método PUT para actualización (HTML solo soporta GET/POST) --}}
                    @method('PUT')

                    {{-- Campo para el número del computador --}}
                    <div class="mb-3">
                        <label for="number" class="form-label">Número del Computador</label>
                        <input type="number" name="number" id="number" value="{{ old('number', $computer->number) }}" placeholder="Enter number">
                    </div>

                    {{-- Campo para la marca del computador --}}
                    <div class="mb-3">
                        <label for="brand" class="form-label">Marca</label>
                        <input type="text" name="brand" id="brand" value="{{ old('brand', $computer->brand) }}" placeholder="Enter brand">
                    </div>

                    {{-- Botón para enviar el formulario --}}
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Computador
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
