@extends('layouts.app')

{{-- Vista principal que muestra el listado de todos los profesores --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título de la página --}}
    <h1>Lista de los Profesores...</h1>

    {{-- Botón para crear un nuevo profesor --}}
    <a href="{{ route('teacher.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    {{-- Tabla que muestra la lista de profesores --}}
    <table class="table table-bordered border-primary">
        {{-- Encabezado de la tabla --}}
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            {{-- Iteración sobre cada profesor en la colección --}}
            @foreach ($teachers as $teacher)
                <tr>
                    {{-- Datos del profesor --}}
                    <th scope="row">{{$teacher['id']}}</th>
                    <td>{{$teacher['name']}}</td>
                    <td>{{$teacher['email']}}</td>

                    {{-- Botones de acción para cada profesor --}}
                    <td>
                        {{-- Botón para ver detalles --}}
                        <a href="{{ route('teacher.show', $teacher['id']) }}" class="btn btn-outline-primary">Ver más</a>
                    </td>
                    <td>
                        {{-- Botón para editar --}}
                        <a href="{{ route('teacher.edit', $teacher->id) }}"class="btn btn-outline-success">Editar</a>
                    </td>
                    <td>
                        {{-- Formulario para eliminar con método DELETE --}}
                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
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
