@extends('layouts.app')

@section('content')

    <!--Este archivo es una vista de Blade en Laravel que contiene un todas las areas creadas en la base de datos.
    Se utiliza la sintaxis de Blade para mostrar el contenido de la variable $areas, que se espera que contenga una lista de áreas.
    La vista se renderiza en el navegador y muestra un encabezado y la lista de áreas.-->

    <h1>Listar las Areas...</h1>

    <a href="{{ route('area.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    <table class="table table-bordered border-primary">
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
        @foreach ($areas as $area)
            <tr>
                <th scope="row">{{$area['id']}}</th>
                <td>{{$area['name']}}</td>
                <td>
                    <a href="{{ route('area.show', $area['id']) }}" class="btn btn-outline-primary">Ver más</a>
                </td>
                <td><a href="{{ route('area.edit', $area->id) }}"class="btn btn-outline-success">Editar</a></td>
                <td>
                    <form action="{{ route('area.destroy', $area->id) }}" method="POST">
                        @csrf
                        @method('delete')
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




