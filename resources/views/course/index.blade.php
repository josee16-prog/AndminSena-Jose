@extends('layouts.app')

@section('content')

<h1>Lista de los Cursos...</h1>

<a href="{{ route('course.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th class="table-primary" scope="col">ID</th>
            <th class="table-primary" scope="col">Número del curso</th>
            <th class="table-primary" scope="col">Day</th>
        </tr>
    </thead>
<tbody>
    @foreach ($courses as $course)
        <tr>
            <th scope="row">{{$course['id']}}</th>
            <td>{{$course['course_number']}}</td>
            <td>{{$course['day']}}</td>
        </tr>
    @endforeach
</tbody>
</table>

@endsection
