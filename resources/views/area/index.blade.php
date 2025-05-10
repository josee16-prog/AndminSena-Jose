<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    // Este archivo es una vista de Blade en Laravel que contiene un todas las areas creadas en la base de datos.
    // Se utiliza la sintaxis de Blade para mostrar el contenido de la variable $areas, que se espera que contenga una lista de áreas.
    // La vista se renderiza en el navegador y muestra un encabezado y la lista de áreas.

    <h1>Listar las Areas...</h1>

    {{$areas}}
</body>
</html>
