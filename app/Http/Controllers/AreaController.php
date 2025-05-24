<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\area;

class AreaController extends Controller
{
    // en la funcion index se listan todas las areas
    // y se envian a la vista area.index
    public function index(){

        $areas = Area::all();
        return view('area.index', compact('areas'));

    }

    // en la funcion create se retorna la vista area.create
    public function create() {

        return view('area.create');

    }

    // en la funcion store se guarda el area en la base de datos
    // y se retorna el area guardado
    public function store(Request $request){

        $area = new Area();
        $area->name=$request->name;
        $area->save();
        return $area;

    }

    public function show($id)
    {
        $area = Area::find($id);

        return view('area.show', compact('area'));
    }

     //Destroy
    public function destroy (Area $area){

        $area->delete();

        return redirect()->route('area.index');
    }

    public function edit(Area $area){

        return view('area.edit',compact('area'));

    }

     //Update
    public function update(Request $request, Area $area){

        $area->name = $request->name;
        $area->save();

        return redirect()->route('area.index');

    }

}
