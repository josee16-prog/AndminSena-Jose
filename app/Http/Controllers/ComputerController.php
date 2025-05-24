<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{

    public function index(){

        $computers = Computer::all();
        return view('computer.index', compact('computers'));

    }

    public function create() {

        return view('computer.create');

    }

    public function store(Request $request){

        $computer = new Computer();
        $computer->number=$request->number;
        $computer->brand=$request->brand;
        $computer->save();
        return $computer;

    }

    public function show($id){

        $computer = Computer::find($id);
        return view('computer.show', compact('computer'));
    }

     //Destroy
    public function destroy (Computer $computer){

        $computer->delete();
        return redirect()->route('computer.index');
    }

    public function edit(Computer $computer){

        return view('computer.edit',compact('computer'));

    }

     //Update
    public function update(Request $request, Computer $computer){

        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return redirect()->route('computer.index');

    }

}
