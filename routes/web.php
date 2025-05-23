<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


//Definicion de las rutas para el controlador AreaController

Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

// Definicion de las rutas para el controlador ComputerController

Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');

// Definicion de las rutas para el controlador TrainingCenterController

Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingcenter/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenter/store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');

// Definicion de las rutas para el controlador ApprenticeController

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');

// Definicion de las rutas para el controlador CourseController

Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');

// Definicion de las rutas para el controlador TeacherController

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
