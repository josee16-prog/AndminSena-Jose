@extends('layouts.app')

{{-- Vista principal que muestra el listado de todos los cursos --}}
{{-- Extiende el layout principal de la aplicación --}}

@section('content')

    {{-- Título de la página --}}
    <h1>Lista de los Cursos...</h1>

    {{-- Botón para crear un nuevo curso --}}
    <a href="{{ route('course.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    {{-- Tabla que muestra la lista de cursos --}}
    <table class="table table-bordered border-primary">
        {{-- Encabezado de la tabla --}}
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Número del curso</th>
                <th scope="col">Día</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            {{-- Iteración sobre cada curso en la colección --}}
            @foreach ($courses as $course)
                <tr>
                    {{-- Datos del curso --}}
                    <th scope="row">{{$course['id']}}</th>
                    <td>{{$course['course_number']}}</td>
                    <td>{{$course['day']}}</td>

                    {{-- Botones de acción para cada curso --}}
                    <td>
                        {{-- Botón para ver detalles --}}
                        <a href="{{ route('course.show', $course['id']) }}" class="btn btn-outline-primary">Ver más</a>
                    </td>
                    <td>
                        {{-- Botón para editar --}}
                        <a href="{{ route('course.edit', $course->id) }}"class="btn btn-outline-success">Editar</a>
                    </td>
                    <td>
                        {{-- Formulario para eliminar con método DELETE --}}
                        <form action="{{ route('course.destroy', $course->id) }}" method="POST">
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
