<!-- Incluye Bootstrap y Font Awesome en el <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    {{-- Footer principal del sistema --}}
    <footer class="bg-dark text-white py-4">
        {{-- Contenedor principal del footer --}}
        <div class="container">
            <div class="row">
                {{-- Columna de información del SENA --}}
                <div class="col-md-4">
                    <h5>SENA</h5>
                    <p>Servicio Nacional de Aprendizaje</p>
                    <p>Formación profesional gratuita</p>
                </div>

                {{-- Columna de enlaces rápidos --}}
                <div class="col-md-4">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        {{-- Enlaces a las diferentes secciones del sistema --}}
                        <li><a href="{{ route('apprentice.index') }}" class="text-white text-decoration-none">Aprendices</a></li>
                        <li><a href="{{ route('area.index') }}" class="text-white text-decoration-none">Áreas</a></li>
                        <li><a href="{{ route('computer.index') }}" class="text-white text-decoration-none">Computadores</a></li>
                        <li><a href="{{ route('course.index') }}" class="text-white text-decoration-none">Cursos</a></li>
                        <li><a href="{{ route('teacher.index') }}" class="text-white text-decoration-none">Profesores</a></li>
                        <li><a href="{{ route('trainingcenter.index') }}" class="text-white text-decoration-none">Centros de Formación</a></li>
                    </ul>
                </div>

                {{-- Columna de contacto --}}
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <address>
                        <p>
                            <i class="bi bi-geo-alt-fill"></i>
                            Dirección: Calle Principal #123<br>
                            Ciudad, País
                        </p>
                        <p>
                            <i class="bi bi-telephone-fill"></i>
                            Teléfono: (123) 456-7890
                        </p>
                        <p>
                            <i class="bi bi-envelope-fill"></i>
                            Email: info@sena.edu.co
                        </p>
                    </address>
                </div>
            </div>

            {{-- Línea divisoria --}}
            <hr class="my-4">

            {{-- Sección de derechos de autor --}}
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">
                        &copy; {{ date('Y') }} SENA - Todos los derechos reservados
                    </p>
                </div>
            </div>
        </div>
    </footer>

