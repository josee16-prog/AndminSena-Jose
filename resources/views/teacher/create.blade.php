@extends('layouts.app')

@section('content')

        <h1>Formulario de Teacher</h1>

    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email">
        </div>

        <div class="mb-3">
            <label for="areas">Areas:</label>
            <select name="area_id" class="form-select">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->id }} - {{ $area->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="training_centers">Training_centers</label>
            <select name="training_centers_id" class="form-select">
                @foreach ($training_centers as $training_center)
                    <option value="{{ $training_center->id }}">{{ $training_center->id }} - {{ $training_centers->name }}- {{ $training_center->location }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
