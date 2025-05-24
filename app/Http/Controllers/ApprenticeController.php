<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apprentice;
use App\Models\course;
use App\Models\computer;

class ApprenticeController extends Controller
{
    //
    public function index(){

        // Se utiliza el método all() para obtener todos los registros de la tabla
        // 'apprentices' de la base de datos
        // y se asigna a la variable $apprentices
        // Se utiliza el método view() para cargar la vista 'apprentice.index'
        // y se le pasan los datos de la variable $apprentices
        // Se utiliza el método compact() para crear un array asociativo
        // donde la clave es 'apprentices' y el valor es la variable $apprentices.

        $apprentices = Apprentice::all();
        return view('apprentice.index', compact('apprentices'));

    }

    public function create() {
        // Se obtienen todos los cursos y computadoras para mostrarlos en el formulario de creación
        // de aprendices
        $courses = Course::all();
        $computers = Computer::all();
        return view('apprentice.create', compact('courses','computers'));

    }

    public function store(Request $request){

        // Se valida la solicitud de creación de aprendiz

        $apprentice = new Apprentice();
        $apprentice->name=$request->name;
        $apprentice->email=$request->email;
        $apprentice->cell_number=$request->cell_number;
        $apprentice->save();
        return redirect()->route('apprentice.index');

    }

    public function show($id){
        // Se utiliza el método find() para buscar un aprendiz por su ID
        // y se asigna a la variable $apprentice
        // Se utiliza el método view() para cargar la vista 'apprentice.show'
        // y se le pasan los datos de la variable $apprentice
        // Se utiliza el método compact() para crear un array asociativo
        // donde la clave es 'apprentice' y el valor es la variable $apprentice.

        $apprentice = Apprentice::find($id);

        return view('apprentice.show', compact('apprentice'));
    }

     //Destroy
    public function destroy (Apprentice $apprentice){

        // Se utiliza el método delete() para eliminar un aprendiz
        // Se utiliza el método redirect() para redirigir a la ruta 'apprentice.index'
        // después de eliminar el aprendiz
        // Se utiliza el método route() para generar la URL de la ruta 'apprentice.index'
        $apprentice->delete();
        return redirect()->route('apprentice.index');
    }

    public function edit(Apprentice $apprentice){
        // Se utiliza el método view() para cargar la vista 'apprentice.edit'
        // y se le pasan los datos de la variable $apprentice
        // Se utiliza el método compact() para crear un array asociativo
        // donde la clave es 'apprentice' y el valor es la variable $apprentice.
        return view('apprentice.edit',compact('apprentice'));

    }

     //Update
    public function update(Request $request, Apprentice $apprentice){

        // Se utiliza el método update() para actualizar un aprendiz
        // Se utiliza el método redirect() para redirigir a la ruta 'apprentice.index'
        // después de actualizar el aprendiz
        // Se utiliza el método route() para generar la URL de la ruta 'apprentice.index'
        // Se utiliza el método save() para guardar los cambios en la base de datos y
        // Se asignan los valores de la solicitud a las propiedades del aprendiz

        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->save();

        return redirect()->route('apprentice.index');

    }
}
