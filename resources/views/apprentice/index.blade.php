@extends('layouts.app')

{{-- Vista principal que muestra el listado de todos los aprendices --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título de la página --}}
    <h1>Lista de los Aprendices...</h1>

    {{-- Botón para crear un nuevo aprendiz --}}
    <a href="{{ route('apprentice.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    {{-- Tabla que muestra la lista de aprendices --}}
    <table class="table table-bordered border-primary">
        {{-- Encabezado de la tabla --}}
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Celular</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            {{-- Iteración sobre cada aprendiz en la colección --}}
            @foreach ($apprentices as $apprentice)
                <tr>
                    {{-- Datos del aprendiz --}}
                    <th scope="row">{{$apprentice['id']}}</th>
                    <td>{{$apprentice['name']}}</td>
                    <td>{{$apprentice['email']}}</td>
                    <td>{{$apprentice['cell_number']}}</td>

                    {{-- Botones de acción para cada aprendiz --}}
                    <td>
                        {{-- Botón para ver detalles --}}
                        <a href="{{ route('apprentice.show', $apprentice['id']) }}" class="btn btn-outline-primary">Ver más</a>
                    </td>
                    <td>
                        {{-- Botón para editar --}}
                        <a href="{{ route('apprentice.edit', $apprentice->id) }}"class="btn btn-outline-success">Editar</a>
                    </td>
                    <td>
                        {{-- Formulario para eliminar con método DELETE --}}
                        <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            {{-- Botón de eliminación con ícono --}}
                            <button type="submit" class="d-flex align-items-center gap-2 btn btn-outline-danger">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
