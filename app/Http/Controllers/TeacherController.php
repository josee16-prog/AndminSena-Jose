<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\training_center;

/**
 * Controlador para gestionar los profesores del sistema
 * Este controlador maneja todas las operaciones CRUD relacionadas con los profesores
 * y sus relaciones con áreas y centros de formación
 */
class TeacherController extends Controller
{
    /**
     * Muestra una lista de todos los profesores
     * @return \Illuminate\View\View
     */
    public function index(){
        // Obtiene todos los profesores de la base de datos
        $teachers = Teacher::all();
        // Retorna la vista con los profesores
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Muestra el formulario para crear un nuevo profesor
     * Incluye la lista de áreas y centros de formación disponibles
     * @return \Illuminate\View\View
     */
    public function create() {
        // Obtiene todas las áreas y centros de formación para los selectores
        $areas = Area::all();
        $training_centers = training_center::all();
        return view('teacher.create', compact('areas','training_centers'));
    }

    /**
     * Almacena un nuevo profesor en la base de datos
     * @param Request $request
     * @return Teacher
     */
    public function store(Request $request){
        // Crea una nueva instancia de Teacher
        $teacher = new Teacher();
        // Asigna los valores desde la request
        $teacher->name=$request->name;
        $teacher->email=$request->email;
        // Guarda el profesor en la base de datos
        $teacher->save();
        return $teacher;
    }

    /**
     * Muestra los detalles de un profesor específico
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        // Busca el profesor por su ID
        $teacher = Teacher::find($id);
        // Retorna la vista con los detalles del profesor
        return view('teacher.show', compact('teacher'));
    }

    /**
     * Elimina un profesor de la base de datos
     * @param Teacher $teacher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy (Teacher $teacher){
        // Elimina el profesor
        $teacher->delete();
        // Redirecciona al listado de profesores
        return redirect()->route('teacher.index');
    }

    /**
     * Muestra el formulario para editar un profesor
     * @param Teacher $teacher
     * @return \Illuminate\View\View
     */
    public function edit(Teacher $teacher){
        return view('teacher.edit',compact('teacher'));
    }

    /**
     * Actualiza un profesor en la base de datos
     * @param Request $request
     * @param Teacher $teacher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Teacher $teacher){
        // Actualiza los datos del profesor
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        // Guarda los cambios
        $teacher->save();
        // Redirecciona al listado de profesores
        return redirect()->route('teacher.index');
    }
}
