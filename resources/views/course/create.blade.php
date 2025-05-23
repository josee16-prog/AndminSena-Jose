@extends('layouts.app')

@section('content')

    <h1>Formulario de Cursos</h1>

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="course_number" class="form-label">Número del curso</label>
            <input type="number" class="form-control" id="course_number" name="course_number" placeholder="Enter course number">
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">day</label>
            <input type="text" class="form-control" id="day" name="day" placeholder="Enter day">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection

