<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\training_center;

class CourseController extends Controller
{
    //
    public function index(){

        $courses = Course::all();
        return view('course.index', compact('courses'));

    }

    public function create() {

        $areas = Area::all();
        $training_centers = training_center::all();
        return view('course.create', compact('areas','training_centers'));

    }

    public function store(Request $request){

        $course = new Course();
        $course->course_number=$request->course_number;
        $course->day=$request->day;
        $course->save();
        return $course;

    }

    public function show($id){

        $course = Course::find($id);
        return view('course.show', compact('course'));
    }

    //Destroy
    public function destroy (Course $course){

        $course->delete();
        return redirect()->route('course.index');
    }

    public function edit(Course $course){

        return view('course.edit',compact('course'));

    }

     //Update
    public function update(Request $request, Course $course){

        $course->course_number = $request->course_number;
        $course->day = $request->day;
        $course->save();

        return redirect()->route('course.index');

    }

}
