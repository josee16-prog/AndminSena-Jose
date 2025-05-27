@extends('layouts.app')

{{-- Vista principal que muestra el listado de todas las áreas --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título de la página --}}
    <h1>Lista de las Áreas...</h1>

    {{-- Botón para crear una nueva área --}}
    <a href="{{ route('area.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    {{-- Tabla que muestra la lista de áreas --}}
    <table class="table table-bordered border-primary">
        {{-- Encabezado de la tabla --}}
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            {{-- Iteración sobre cada área en la colección --}}
            @foreach ($areas as $area)
                <tr>
                    {{-- Datos del área --}}
                    <th scope="row">{{$area['id']}}</th>
                    <td>{{$area['name']}}</td>

                    {{-- Botones de acción para cada área --}}
                    <td>
                        {{-- Botón para ver detalles --}}
                        <a href="{{ route('area.show', $area['id']) }}" class="btn btn-outline-primary">Ver más</a>
                    </td>
                    <td>
                        {{-- Botón para editar --}}
                        <a href="{{ route('area.edit', $area->id) }}"class="btn btn-outline-success">Editar</a>
                    </td>
                    <td>
                        {{-- Formulario para eliminar con método DELETE --}}
                        <form action="{{ route('area.destroy', $area->id) }}" method="POST">
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




