@extends('layouts.app')

@section('content')

    <h1>Lista de los Cursos...</h1>

    <a href="{{ route('teacher.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th class="table-primary" scope="col">ID</th>
                <th class="table-primary" scope="col">Nombre</th>
                <th class="table-primary" scope="col">Email</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <th scope="row">{{$teacher['id']}}</th>
                <td>{{$teacher['name']}}</td>
                <td>{{$teacher['email']}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection
