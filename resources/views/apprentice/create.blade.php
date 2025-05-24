@extends('layouts.app')

@section('content')

    <h1>Formulario de aprendizes</h1>

    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="mb-3">
            <label for="cell_number" class="form-label">Celular</label>
            <input type="number" class="form-control" id="cell_number" name="cell_number" placeholder="Enter cell number">
        </div>

        <div class="mb-3">
            <label for="course">Courses</label>
            <select name="course_id" class="form-select">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->id }} - {{ $course->course_number }}- {{ $course->day }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="computers">Computers</label>
            <select name="computer_id" class="form-select">
                @foreach ($computers as $computer)
                    <option value="{{ $computer->id }}">{{ $computer->id }} - {{ $computer->number }}- {{ $computer->brand }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

@endsection
