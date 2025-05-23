@extends('layouts.app')

@section('content')

        <h1>Formulario de Teacher</h1>

    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
