@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Area</h2>

    <div class="table-responsive">
        <table class="table table-bordered border-primary table-hover">
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['name'] }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
