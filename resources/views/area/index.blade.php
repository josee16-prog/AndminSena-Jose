@extends('layouts.app')

@section('content')

    <!--Este archivo es una vista de Blade en Laravel que contiene un todas las areas creadas en la base de datos.
    Se utiliza la sintaxis de Blade para mostrar el contenido de la variable $areas, que se espera que contenga una lista de áreas.
    La vista se renderiza en el navegador y muestra un encabezado y la lista de áreas.-->

    <h1>Listar las Areas...</h1>

    {{$areas}}

@endsection




