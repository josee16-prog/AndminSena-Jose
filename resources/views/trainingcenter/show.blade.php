@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h1>Detalles del Prifesor</h1>

    <div class="table-responsive">
        <table class="table table-bordered border-primary table-hover">
            <thead class="table-primary border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicación</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $trainingcenter['id'] }}</td>
                    <td>{{ $trainingcenter['name'] }}</td>
                    <td>{{ $trainingcenter['location'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
