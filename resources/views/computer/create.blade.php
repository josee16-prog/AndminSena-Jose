@extends('layouts.app')

@section('content')

    <h1>Formulario de Computers</h1>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Número</label>
            <input type="number" class="form-control" id="number" name="number" placeholder="Enter course number">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
