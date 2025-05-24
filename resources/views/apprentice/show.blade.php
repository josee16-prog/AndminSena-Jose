@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles del Aprendiz</h2>

    <div class="table-responsive">
        <table class="table table-bordered border-primary table-hover">
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $apprentice['id'] }}</td>
                    <td>{{ $apprentice['name'] }}</td>
                    <td>{{ $apprentice['email'] }}</td>
                    <td>{{ $apprentice['cell_number'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
