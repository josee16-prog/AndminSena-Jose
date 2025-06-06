@extends('layouts.app')

{{-- Este archivo es una vista de Blade para crear nuevos aprendices --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título del formulario --}}
    <h1>Formulario de aprendizes</h1>

    {{-- Formulario que envía datos mediante POST a la ruta apprentice.store --}}
    {{-- enctype="multipart/form-data" permite el envío de archivos si fuera necesario --}}
    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">
        {{-- Token CSRF para protección contra ataques cross-site --}}
        @csrf

        {{-- Campo para el nombre del aprendiz --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>

        {{-- Campo para el email del aprendiz --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>

        {{-- Campo para el número de celular del aprendiz --}}
        <div class="mb-3">
            <label for="cell_number" class="form-label">Celular</label>
            <input type="number" class="form-control" id="cell_number" name="cell_number" placeholder="Enter cell number">
        </div>

        {{-- Select para asignar un curso al aprendiz --}}
        <div class="mb-3">
            <label for="course">Courses</label>
            <select name="course_id" class="form-select">
                @foreach ($courses as $course)
                    {{-- Itera sobre todos los cursos disponibles --}}
                    <option value="{{ $course->id }}">{{ $course->id }} - {{ $course->course_number }}- {{ $course->day }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Select para asignar un computador al aprendiz --}}
        <div class="mb-3">
            <label for="computers">Computers</label>
            <select name="computer_id" class="form-select">
                @foreach ($computers as $computer)
                    {{-- Itera sobre todos los computadores disponibles --}}
                    <option value="{{ $computer->id }}">{{ $computer->id }} - {{ $computer->number }}- {{ $computer->brand }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Botón para enviar el formulario --}}
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

@endsection
