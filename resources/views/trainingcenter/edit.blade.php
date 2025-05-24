@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar centro de formación</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('trainingcenter.update', $trainingcenter->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre del Centro</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $trainingcenter->name) }}" placeholder="Enter name">
                        <label for="location" class="form-label">Ubicación</label>
                        <input type="text" id="location" name="location" value="{{ old('location', $trainingcenter->location) }}" placeholder="Enter location">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Profesor
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
