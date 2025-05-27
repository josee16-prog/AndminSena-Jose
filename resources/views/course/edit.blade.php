@extends('layouts.app')

{{-- Vista para editar un curso existente --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')
    {{-- Contenedor principal con margen superior --}}
    <div class="container mt-5">
        {{-- Título del formulario --}}
        <h1 class="mb-4">Actualizar Curso</h1>

        {{-- Tarjeta con sombra suave para el formulario --}}
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Formulario para actualizar el curso --}}
                <form action="{{ route('course.update', $course->id) }}" method="POST">
                    {{-- Token CSRF para protección contra ataques cross-site --}}
                    @csrf
                    {{-- Método PUT para actualización (HTML solo soporta GET/POST) --}}
                    @method('PUT')

                    {{-- Campo para el número del curso --}}
                    <div class="mb-3">
                        <label for="course_number" class="form-label">Número del curso</label>
                        <input type="number" name="course_number" id="course_number" value="{{ old('course_number', $course->course_number) }}" placeholder="Ingrese el número del curso">
                        {{-- Campo para el día del curso --}}
                        <label for="day" class="form-label">Día</label>
                        <input type="text" id="day" name="day" value="{{ old('day', $course->day) }}" placeholder="Ingrese el día">
                    </div>

                    {{-- Botón para enviar el formulario --}}
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Curso
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
