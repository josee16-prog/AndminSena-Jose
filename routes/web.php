<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

// Definicion de las rutas para el controlador ApprenticeController

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update');
Route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');
Route::get('apprentices/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');

//Definicion de las rutas para el controlador AreaController

Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('areas/{area}', [AreaController::class, 'show'])->name('area.show');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
Route::get('areas/{area}/editar',[AreaController::class,'edit'])->name('area.edit');

// Definicion de las rutas para el controlador ComputerController

Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');
Route::get('computers/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');

// Definicion de las rutas para el controlador CourseController

Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('courses/{course}', [CourseController::class, 'show'])->name('course.show');
Route::put('course/{course}',[CourseController::class,'update'])->name('course.update');
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');
Route::get('courses/{course}/editar',[CourseController::class,'edit'])->name('course.edit');

// Definicion de las rutas para el controlador TeacherController

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teachers/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');

// Definicion de las rutas para el controlador TrainingCenterController

Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingcenter/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenter/store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');
Route::get('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'show'])->name('trainingcenter.show');
Route::put('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'update'])->name('trainingcenter.update');
Route::delete('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'destroy'])->name('trainingcenter.destroy');
Route::get('trainingcenters/{trainingcenter}/editar',[TrainingCenterController::class,'edit'])->name('trainingcenter.edit');
