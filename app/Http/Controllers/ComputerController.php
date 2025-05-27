<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

/**
 * Controlador para gestionar los computadores del sistema
 * Este controlador maneja todas las operaciones CRUD relacionadas con los computadores
 */
class ComputerController extends Controller
{
    /**
     * Muestra una lista de todos los computadores
     * @return \Illuminate\View\View
     */
    public function index(){
        // Obtiene todos los computadores de la base de datos
        $computers = Computer::all();
        // Retorna la vista con los computadores
        return view('computer.index', compact('computers'));
    }

    /**
     * Muestra el formulario para crear un nuevo computador
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('computer.create');
    }

    /**
     * Almacena un nuevo computador en la base de datos
     * @param Request $request
     * @return Computer
     */
    public function store(Request $request){
        // Crea una nueva instancia de Computer
        $computer = new Computer();
        // Asigna los valores desde la request
        $computer->number=$request->number;
        $computer->brand=$request->brand;
        // Guarda el computador en la base de datos
        $computer->save();
        return $computer;
    }

    /**
     * Muestra los detalles de un computador específico
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        // Busca el computador por su ID
        $computer = Computer::find($id);
        // Retorna la vista con los detalles del computador
        return view('computer.show', compact('computer'));
    }

    /**
     * Elimina un computador de la base de datos
     * @param Computer $computer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy (Computer $computer){
        // Elimina el computador
        $computer->delete();
        // Redirecciona al listado de computadores
        return redirect()->route('computer.index');
    }

    /**
     * Muestra el formulario para editar un computador
     * @param Computer $computer
     * @return \Illuminate\View\View
     */
    public function edit(Computer $computer){
        return view('computer.edit',compact('computer'));
    }

    /**
     * Actualiza un computador en la base de datos
     * @param Request $request
     * @param Computer $computer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Computer $computer){
        // Actualiza los datos del computador
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        // Guarda los cambios
        $computer->save();
        // Redirecciona al listado de computadores
        return redirect()->route('computer.index');
    }
}
