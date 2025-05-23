@extends('layouts.app')

@section('content')

    <h1>Formulario de aprendizes</h1>

    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Nombre</label>
        <input type="text" id="title" name="name"><br>
        <label for="email">email</label>
        <input type="email" id="email" name="email"><br>
        <label for="cell_number">Celular</label>
        <input type="number" id="cell_number" name="cell_number"><br>
        <button type="submit">Enviar</button>
    </form>

@endsection
