<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\training_center;

class TrainingCenterController extends Controller
{

    public function index(){

        $trainingcenters = Training_center::all();
        return view('trainingcenter.index', compact('trainingcenters'));

    }

    public function create() {

        return view('trainingcenter.create');

    }

    public function store(Request $request){

        $trainingcenter = new Training_center();
        $trainingcenter->name=$request->name;
        $trainingcenter->location=$request->location;
        $trainingcenter->save();
        return $trainingcenter;

    }

    public function show($id){

        $trainingcenter = Training_center::find($id);
        return view('trainingcenter.show', compact('trainingcenter'));
    }

    //Destroy
    public function destroy (Training_center $trainingcenter){

        $trainingcenter->delete();
        return redirect()->route('trainingcenter.index');
    }

    public function edit(Training_center $trainingcenter){

        return view('trainingcenter.edit',compact('trainingcenter'));

    }

     //Update
    public function update(Request $request, Training_center $trainingcenter){

        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        $trainingcenter->save();

        return redirect()->route('trainingcenter.index');

    }

}
