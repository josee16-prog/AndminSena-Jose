@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Profesor</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre del Profesor</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $teacher->name) }}" placeholder="Enter name">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $teacher->email) }}" placeholder="Enter email">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Profesor
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
