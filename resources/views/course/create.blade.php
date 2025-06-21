@extends('layouts.app')

{{-- Vista para crear un nuevo curso --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título del formulario --}}
    <h1>Formulario de Cursos</h1>

    {{-- Formulario para crear un nuevo curso --}}
    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
        {{-- Token CSRF para protección contra ataques cross-site --}}
        @csrf

        {{-- Campo para el número del curso --}}
        <div class="mb-3">
            <label for="course_number" class="form-label">Número del curso</label>
            <input type="number" class="form-control" id="course_number" name="course_number" placeholder="Ingrese el número del curso">
        </div>

        {{-- Campo para el día del curso --}}
        <div class="mb-3">
            <label for="day" class="form-label">Día</label>
            <input type="text" class="form-control" id="day" name="day" placeholder="Ingrese el día">
        </div>

        {{-- Selector de área para el curso --}}
        <div class="mb-3">
            <label for="areas">Áreas:</label>
            <select name="area_id" class="form-select">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->id }} - {{ $area->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Selector de centro de formación --}}
        <div class="mb-3">
            <label for="training_centers">Centro de formación</label>
            <select name="training_centers_id" class="form-select">
                @foreach ($training_centers as $training_center)
                    <option value="{{ $training_center->id }}">{{ $training_center->id }} - {{ $training_center->name }} - {{ $training_center->location }}</option>
                @endforeach
            </select>
        </div>

        {{-- Botón para enviar el formulario --}}
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection

