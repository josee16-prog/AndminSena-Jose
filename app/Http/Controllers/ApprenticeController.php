<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apprentice;

class ApprenticeController extends Controller
{
    //
    public function index(){

        $apprentices = Apprentice::all();
        return view('apprentice.index', compact('apprentices'));

    }

    public function create() {

        return view('apprentice.create');

    }

    public function store(Request $request){

        $apprentice = new Apprentice();
        $apprentice->name=$request->name;
        $apprentice->email=$request->email;
        $apprentice->cell_number=$request->cell_number;
        $apprentice->save();
        return $apprentice;

    }
}
