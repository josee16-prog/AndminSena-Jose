<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apprentice;
use App\Models\course;
use App\Models\computer;

/**
 * Controlador para gestionar los aprendices del sistema
 * Este controlador maneja todas las operaciones CRUD relacionadas con los aprendices
 * y sus relaciones con cursos y computadores
 */
class ApprenticeController extends Controller
{
    /**
     * Muestra una lista de todos los aprendices
     * @return \Illuminate\View\View
     */
    public function index(){
        /**
         * Se utiliza el método all() para obtener todos los registros de la tabla
         * 'apprentices' de la base de datos y se asigna a la variable $apprentices
         * Se utiliza el método view() para cargar la vista 'apprentice.index'
         * y se le pasan los datos de la variable $apprentices mediante compact()
         */
        $apprentices = Apprentice::all();
        return view('apprentice.index', compact('apprentices'));
    }

    /**
     * Muestra el formulario para crear un nuevo aprendiz
     * Incluye la lista de cursos y computadores disponibles
     * @return \Illuminate\View\View
     */
    public function create() {
        /**
         * Se obtienen todos los cursos y computadoras disponibles
         * para mostrarlos en el formulario de creación de aprendices
         * mediante selectores
         */
        $courses = Course::all();
        $computers = Computer::all();
        return view('apprentice.create', compact('courses','computers'));
    }

    /**
     * Almacena un nuevo aprendiz en la base de datos
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        /**
         * Se crea una nueva instancia del modelo Apprentice
         * Se asignan los valores recibidos del formulario
         * Se guarda el registro en la base de datos
         */
        $apprentice = new Apprentice();
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->save();

        // Redirecciona al listado de aprendices
        return redirect()->route('apprentice.index');
    }

    /**
     * Muestra los detalles de un aprendiz específico
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        /**
         * Se utiliza el método find() para buscar un aprendiz por su ID
         * Se retorna la vista con los detalles del aprendiz encontrado
         */
        $apprentice = Apprentice::find($id);
        return view('apprentice.show', compact('apprentice'));
    }

    /**
     * Elimina un aprendiz de la base de datos
     * @param Apprentice $apprentice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Apprentice $apprentice){
        /**
         * Se utiliza el método delete() para eliminar el aprendiz
         * Se redirecciona al listado de aprendices después de la eliminación
         */
        $apprentice->delete();
        return redirect()->route('apprentice.index');
    }

    /**
     * Muestra el formulario para editar un aprendiz
     * @param Apprentice $apprentice
     * @return \Illuminate\View\View
     */
    public function edit(Apprentice $apprentice){
        /**
         * Se retorna la vista de edición con los datos del aprendiz
         * que se desea modificar
         */
        return view('apprentice.edit', compact('apprentice'));
    }

    /**
     * Actualiza un aprendiz en la base de datos
     * @param Request $request
     * @param Apprentice $apprentice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Apprentice $apprentice){
        /**
         * Se actualizan los datos del aprendiz con los valores
         * recibidos del formulario de edición
         */
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;

        // Guarda los cambios en la base de datos
        $apprentice->save();

        // Redirecciona al listado de aprendices
        return redirect()->route('apprentice.index');
    }
}
