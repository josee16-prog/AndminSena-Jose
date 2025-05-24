@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h1>Detalles del Prefesor</h1>

    <div class="table-responsive">
        <table class="table table-bordered border-primary table-hover">
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $teacher['id'] }}</td>
                    <td>{{ $teacher['name'] }}</td>
                    <td>{{ $teacher['email'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
