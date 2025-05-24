@extends('layouts.app')

@section('content')

    <h1>Lista de los Profesores...</h1>

    <a href="{{ route('teacher.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    <table class="table table-bordered border-primary">
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
        @foreach ($teachers as $teacher)
            <tr>
                <th scope="row">{{$teacher['id']}}</th>
                <td>{{$teacher['name']}}</td>
                <td>{{$teacher['email']}}</td>

                <td>
                    <a href="{{ route('teacher.show', $teacher['id']) }}" class="btn btn-outline-primary">Ver más</a>
                </td>
                <td><a href="{{ route('teacher.edit', $teacher->id) }}"class="btn btn-outline-success">Editar</a></td>
                <td>
                    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
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
