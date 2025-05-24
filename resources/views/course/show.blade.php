@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h1>Detalles del Curso</h1>

    <div class="table-responsive">
        <table class="table table-bordered border-primary table-hover">
            <thead class="table-bordered border-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Numero del curso</th>
                    <th scope="col">Dia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $course['id'] }}</td>
                    <td>{{ $course['course_number'] }}</td>
                    <td>{{ $course['day'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
