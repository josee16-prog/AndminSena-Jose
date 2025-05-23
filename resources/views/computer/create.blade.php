@extends('layouts.app')

@section('content')

    <h1>Formulario de Computers</h1>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="number">Numero</label>
        <input type="number" id="number" name="number"><br>
        <label for="brand">Marca</label>
        <input type="text" id="brand" name="brand"><br>
        <button type="submit">Enviar</button>
    </form>
    
@endsection
