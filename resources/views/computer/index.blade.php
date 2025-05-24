@extends('layouts.app')

@section('content')

    <h1>Lista de computadores...</h1>

    <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    <table class="table table-bordered border-primary">
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Número</th>
                <th scope="col">Brand</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
    <tbody>
        @foreach ($computers as $computer)
            <tr>
                <th scope="row">{{$computer['id']}}</th>
                <td>{{$computer['number']}}</td>
                <td>{{$computer['brand']}}</td>

                <td>
                    <a href="{{ route('computer.show', $computer['id']) }}" class="btn btn-outline-primary">Ver más</a>
                </td>
                <td><a href="{{ route('computer.edit', $computer->id) }}"class="btn btn-outline-success">Editar</a></td>
                <td>
                    <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
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

