@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles del Computador</h2>

    <div class="table-responsive">
        <table class="table table-bordered border-primary table-hover">
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Marca</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['number'] }}</td>
                    <td>{{ $computer['brand'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
