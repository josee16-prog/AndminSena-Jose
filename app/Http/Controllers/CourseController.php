<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\training_center;

/**
 * Controlador para gestionar los cursos del sistema
 * Este controlador maneja todas las operaciones CRUD relacionadas con los cursos
 * y sus relaciones con áreas y centros de formación
 */
class CourseController extends Controller
{
    /**
     * Muestra una lista de todos los cursos
     * @return \Illuminate\View\View
     */
    public function index(){
        // Obtiene todos los cursos de la base de datos
        $courses = Course::all();
        // Retorna la vista con los cursos
        return view('course.index', compact('courses'));
    }

    /**
     * Muestra el formulario para crear un nuevo curso
     * Incluye la lista de áreas y centros de formación disponibles
     * @return \Illuminate\View\View
     */
    public function create() {
        // Obtiene todas las áreas y centros de formación para los selectores
        $areas = Area::all();
        $training_centers = training_center::all();
        return view('course.create', compact('areas','training_centers'));
    }

    /**
     * Almacena un nuevo curso en la base de datos
     * @param Request $request
     * @return Course
     */
    public function store(Request $request){
        // Crea una nueva instancia de Course
        $course = new Course();
        // Asigna los valores desde la request
        $course->course_number=$request->course_number;
        $course->day=$request->day;
        // Guarda el curso en la base de datos
        $course->save();
        return $course;
    }

    /**
     * Muestra los detalles de un curso específico
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        // Busca el curso por su ID
        $course = Course::find($id);
        // Retorna la vista con los detalles del curso
        return view('course.show', compact('course'));
    }

    /**
     * Elimina un curso de la base de datos
     * @param Course $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy (Course $course){
        // Elimina el curso
        $course->delete();
        // Redirecciona al listado de cursos
        return redirect()->route('course.index');
    }

    /**
     * Muestra el formulario para editar un curso
     * @param Course $course
     * @return \Illuminate\View\View
     */
    public function edit(Course $course){
        return view('course.edit',compact('course'));
    }

    /**
     * Actualiza un curso en la base de datos
     * @param Request $request
     * @param Course $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Course $course){
        // Actualiza los datos del curso
        $course->course_number = $request->course_number;
        $course->day = $request->day;
        // Guarda los cambios
        $course->save();
        // Redirecciona al listado de cursos
        return redirect()->route('course.index');
    }
}
