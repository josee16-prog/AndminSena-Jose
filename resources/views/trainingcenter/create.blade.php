@extends('layouts.app')

@section('content')
    <h1>Formulario de training Centers</h1>

    <form action="{{ route('trainingcenter.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter location">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
