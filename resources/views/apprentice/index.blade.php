@extends('layouts.app')

@section('content')

    <h1>Lista de los Aprendizes...</h1>

    <a href="{{ route('apprentice.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    <table class="table table-bordered border-primary">
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
        @foreach ($apprentices as $apprentice)
            <tr>
                <th scope="row">{{$apprentice['id']}}</th>
                <td>{{$apprentice['name']}}</td>
                <td>{{$apprentice['email']}}</td>
                <td>{{$apprentice['cell_number']}}</td>

                <td>
                    <a href="{{ route('apprentice.show', $apprentice['id']) }}" class="btn btn-outline-primary">Ver más</a>
                </td>
                <td><a href="{{ route('apprentice.edit', $apprentice->id) }}"class="btn btn-outline-success">Editar</a></td>
                <td>
                    <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
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
