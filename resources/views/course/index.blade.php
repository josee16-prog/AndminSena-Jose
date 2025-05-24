@extends('layouts.app')

@section('content')

<h1>Lista de los Cursos...</h1>

<a href="{{ route('course.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

<table class="table table-bordered border-primary">
    <thead class="table-primary border-primary">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Número del curso</th>
            <th scope="col">Day</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
<tbody>
    @foreach ($courses as $course)
        <tr>
            <th scope="row">{{$course['id']}}</th>
            <td>{{$course['course_number']}}</td>
            <td>{{$course['day']}}</td>

            <td>
                <a href="{{ route('course.show', $course['id']) }}" class="btn btn-outline-primary">Ver más</a>
            </td>
            <td><a href="{{ route('course.edit', $course->id) }}"class="btn btn-outline-success">Editar</a></td>
            <td>
                <form action="{{ route('course.destroy', $course->id) }}" method="POST">
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
