{{-- Barra de navegación principal del sistema --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    {{-- Contenedor principal de la barra de navegación --}}
    <div class="container-fluid">
        {{-- Logo o nombre del sistema --}}
        <a class="navbar-brand" href="#">AdminSena</a>

        {{-- Botón de hamburguesa para menú móvil --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menú de navegación colapsable --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- Lista de enlaces de navegación --}}
            <ul class="navbar-nav">
                {{-- Enlace a la página de aprendices --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apprentice.index') }}">Aprendices</a>
                </li>
                {{-- Enlace a la página de áreas --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('area.index') }}">Areas</a>
                </li>
                {{-- Enlace a la página de computadores --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('computer.index') }}">Computadores</a>
                </li>
                {{-- Enlace a la página de cursos --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('course.index') }}">Cursos</a>
                </li>
                {{-- Enlace a la página de profesores --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher.index') }}">Profesores</a>
                </li>
                {{-- Enlace a la página de centros de formación --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('trainingcenter.index') }}">Centros de formación</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

