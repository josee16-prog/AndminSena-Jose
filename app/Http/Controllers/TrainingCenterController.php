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

}
