@extends('layouts.app')

@section('content')
    <!--Este archivo es una vista de Blade en Laravel que contiene un formulario para crear un nuevo área
    El formulario envía una solicitud POST a la ruta 'area.store' y utiliza el método CSRF para proteger contra ataques CSRF
    El formulario incluye un campo de entrada de texto para el nombre del área y un botón de envío
    Al enviar el formulario, se espera que se procese la solicitud en el controlador correspondiente
    y se almacene el nuevo área en la base de datos
    El formulario también incluye un encabezado que indica que se trata de un formulario de área-->

    <h1>Formulario de area</h1>

    <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Nombre</label>
        <input type="text" id="title" name="name">
        <button type="submit">Enviar</button>
    </form>
    
@endsection
