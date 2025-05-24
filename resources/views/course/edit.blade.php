@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Curso</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('course.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="course_number" class="form-label">Numero del curso</label>
                        <input type="number"name="course_number"id="course_number"value="{{ old('course_number', $course->course_number) }}" placeholder="Enter course number">
                        <label for="day" class="form-label">Dia</label>
                        <input type="text" id="day" name="day" value="{{ old('day', $course->day) }}" placeholder="Enter day">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Curso
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
