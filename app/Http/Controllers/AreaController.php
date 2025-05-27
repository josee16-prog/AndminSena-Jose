<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\area;

/**
 * Controlador para gestionar las áreas del sistema
 * Este controlador maneja todas las operaciones CRUD relacionadas con las áreas
 */
class AreaController extends Controller
{
    /**
     * Muestra una lista de todas las áreas
     * @return \Illuminate\View\View
     */
    public function index(){
        // Obtiene todas las áreas de la base de datos
        $areas = Area::all();
        // Retorna la vista con las áreas
        return view('area.index', compact('areas'));
    }

    /**
     * Muestra el formulario para crear una nueva área
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('area.create');
    }

    /**
     * Almacena una nueva área en la base de datos
     * @param Request $request
     * @return Area
     */
    public function store(Request $request){
        // Crea una nueva instancia de Area
        $area = new Area();
        // Asigna el nombre desde la request
        $area->name=$request->name;
        // Guarda el área en la base de datos
        $area->save();
        return $area;
    }

    /**
     * Muestra los detalles de un área específica
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Busca el área por su ID
        $area = Area::find($id);
        // Retorna la vista con los detalles del área
        return view('area.show', compact('area'));
    }

    /**
     * Elimina un área de la base de datos
     * @param Area $area
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy (Area $area){
        // Elimina el área
        $area->delete();
        // Redirecciona al listado de áreas
        return redirect()->route('area.index');
    }

    /**
     * Muestra el formulario para editar un área
     * @param Area $area
     * @return \Illuminate\View\View
     */
    public function edit(Area $area){
        return view('area.edit',compact('area'));
    }

    /**
     * Actualiza un área en la base de datos
     * @param Request $request
     * @param Area $area
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Area $area){
        // Actualiza el nombre del área
        $area->name = $request->name;
        // Guarda los cambios
        $area->save();
        // Redirecciona al listado de áreas
        return redirect()->route('area.index');
    }
}
