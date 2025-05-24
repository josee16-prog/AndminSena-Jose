@extends('layouts.app')

@section('content')

    <h1>Lista de los centros de formación...</h1>

    <a href="{{ route('trainingcenter.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    <table class="table table-bordered border-primary">
        <thead class="table-primary border-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Location</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
    <tbody>
        @foreach ($trainingcenters as $trainingcenter)
            <tr>
                <th scope="row">{{$trainingcenter['id']}}</th>
                <td>{{$trainingcenter['name']}}</td>
                <td>{{$trainingcenter['location']}}</td>

                <td>
                    <a href="{{ route('trainingcenter.show', $trainingcenter['id']) }}" class="btn btn-outline-primary">Ver más</a>
                </td>
                <td><a href="{{ route('trainingcenter.edit', $trainingcenter->id) }}"class="btn btn-outline-success">Editar</a></td>
                <td>
                    <form action="{{ route('trainingcenter.destroy', $trainingcenter->id) }}" method="POST">
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
