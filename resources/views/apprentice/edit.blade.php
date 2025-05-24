@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Aprendiz</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre de el aprendiz</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $apprentice->name) }}" placeholder="Enter name">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $apprentice->email) }}" placeholder="Enter email">
                        <label for="cell_number" class="form-label">Celular</label>
                        <input type="number" id="cell_number" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number) }}" placeholder="Enter cell number">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Aprendiz
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
