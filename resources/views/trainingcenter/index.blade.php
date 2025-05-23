@extends('layouts.app')

@section('content')

    <h1>Lista de los centros de formación...</h1>

    <a href="{{ route('trainingcenter.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th class="table-primary" scope="col">ID</th>
                <th class="table-primary" scope="col">Nombre</th>
                <th class="table-primary" scope="col">Location</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($trainingcenters as $trainingcenter)
            <tr>
                <th scope="row">{{$trainingcenter['id']}}</th>
                <td>{{$trainingcenter['name']}}</td>
                <td>{{$trainingcenter['location']}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>

@endsection
