@extends('layouts.app')

{{-- Vista principal que muestra el listado de todos los computadores --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título de la página --}}
    <h1>Lista de los Computadores...</h1>

    {{-- Botón para crear un nuevo computador --}}
    <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    {{-- Tabla que muestra la lista de computadores --}}
    <table class="table table-bordered border-primary">
        {{-- Encabezado de la tabla --}}
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Numero</th>
                <th scope="col">Marca</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            {{-- Iteración sobre cada computador en la colección --}}
            @foreach ($computers as $computer)
                <tr>
                    {{-- Datos del computador --}}
                    <th scope="row">{{$computer['id']}}</th>
                    <td>{{$computer['number']}}</td>
                    <td>{{$computer['brand']}}</td>
                    <td>{{$computer['urlPdf']}}</td>
                    <td><iframe src="{{'http://localhost/AdminSena/public/storage/imagenes/' .$computer->urlPdf }}" frameborder="0"></iframe></td>

                    {{-- Botones de acción para cada computador --}}
                    <td>
                        {{-- Botón para ver detalles --}}
                        <a href="{{ route('computer.show', $computer['id']) }}" class="btn btn-outline-primary">Ver más</a>
                    </td>
                    <td>
                        {{-- Botón para editar --}}
                        <a href="{{ route('computer.edit', $computer->id) }}"class="btn btn-outline-success">Editar</a>
                    </td>
                    <td>
                        {{-- Formulario para eliminar con método DELETE --}}
                        <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            {{-- Botón de eliminación con ícono --}}
                            <button type="submit" class=" d-flex align-items-center gap-2 btn btn-outline-danger">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

