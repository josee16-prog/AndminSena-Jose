@extends('layouts.app')

{{-- Vista principal que muestra el listado de todos los centros de formación --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título de la página --}}
    <h1>Lista de los centros de formación...</h1>

    {{-- Botón para crear un nuevo centro de formación --}}
    <a href="{{ route('trainingcenter.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    {{-- Tabla que muestra la lista de centros de formación --}}
    <table class="table table-bordered border-primary">
        {{-- Encabezado de la tabla --}}
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ubicación</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            {{-- Iteración sobre cada centro de formación en la colección --}}
            @foreach ($trainingcenters as $trainingcenter)
                <tr>
                    {{-- Datos del centro de formación --}}
                    <th scope="row">{{$trainingcenter['id']}}</th>
                    <td>{{$trainingcenter['name']}}</td>
                    <td>{{$trainingcenter['location']}}</td>

                    {{-- Botones de acción para cada centro --}}
                    <td>
                        {{-- Botón para ver detalles --}}
                        <a href="{{ route('trainingcenter.show', $trainingcenter['id']) }}" class="btn btn-outline-primary">Ver más</a>
                    </td>
                    <td>
                        {{-- Botón para editar --}}
                        <a href="{{ route('trainingcenter.edit', $trainingcenter->id) }}"class="btn btn-outline-success">Editar</a>
                    </td>
                    <td>
                        {{-- Formulario para eliminar con método DELETE --}}
                        <form action="{{ route('trainingcenter.destroy', $trainingcenter->id) }}" method="POST">
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
