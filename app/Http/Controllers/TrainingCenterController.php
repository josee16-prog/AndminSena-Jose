<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\training_center;

/**
 * Controlador para gestionar los centros de formación del sistema
 * Este controlador maneja todas las operaciones CRUD relacionadas con los centros de formación
 */
class TrainingCenterController extends Controller
{
    /**
     * Muestra una lista de todos los centros de formación
     * @return \Illuminate\View\View
     */
    public function index(){
        // Obtiene todos los centros de formación de la base de datos
        $trainingcenters = Training_center::all();
        // Retorna la vista con los centros de formación
        return view('trainingcenter.index', compact('trainingcenters'));
    }

    /**
     * Muestra el formulario para crear un nuevo centro de formación
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('trainingcenter.create');
    }

    /**
     * Almacena un nuevo centro de formación en la base de datos
     * @param Request $request
     * @return Training_center
     */
    public function store(Request $request){
        // Crea una nueva instancia de Training_center
        $trainingcenter = new Training_center();
        // Asigna los valores desde la request
        $trainingcenter->name=$request->name;
        $trainingcenter->location=$request->location;
        // Guarda el centro de formación en la base de datos
        $trainingcenter->save();
        return $trainingcenter;
    }

    /**
     * Muestra los detalles de un centro de formación específico
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        // Busca el centro de formación por su ID
        $trainingcenter = Training_center::find($id);
        // Retorna la vista con los detalles del centro de formación
        return view('trainingcenter.show', compact('trainingcenter'));
    }

    /**
     * Elimina un centro de formación de la base de datos
     * @param Training_center $trainingcenter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy (Training_center $trainingcenter){
        // Elimina el centro de formación
        $trainingcenter->delete();
        // Redirecciona al listado de centros de formación
        return redirect()->route('trainingcenter.index');
    }

    /**
     * Muestra el formulario para editar un centro de formación
     * @param Training_center $trainingcenter
     * @return \Illuminate\View\View
     */
    public function edit(Training_center $trainingcenter){
        return view('trainingcenter.edit',compact('trainingcenter'));
    }

    /**
     * Actualiza un centro de formación en la base de datos
     * @param Request $request
     * @param Training_center $trainingcenter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Training_center $trainingcenter){
        // Actualiza los datos del centro de formación
        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        // Guarda los cambios
        $trainingcenter->save();
        // Redirecciona al listado de centros de formación
        return redirect()->route('trainingcenter.index');
    }
}
