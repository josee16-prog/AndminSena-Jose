@extends('layouts.app')

{{-- Vista para crear un nuevo profesor --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título del formulario --}}
    <h1>Formulario de Profesor</h1>

    {{-- Formulario para crear un nuevo profesor --}}
    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
        {{-- Token CSRF para protección contra ataques cross-site --}}
        @csrf

        {{-- Campo para el nombre del profesor --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del profesor">
        </div>

        {{-- Campo para el email del profesor --}}
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="email" placeholder="Ingrese el email del profesor">
        </div>

        {{-- Selector de área para el profesor --}}
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
