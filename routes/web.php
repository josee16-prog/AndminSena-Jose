<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas para la gestión de Aprendices
|--------------------------------------------------------------------------
|
| Aquí se definen todas las rutas relacionadas con los aprendices:
| - index: Muestra la lista de todos los aprendices
| - create: Muestra el formulario para crear un nuevo aprendiz
| - store: Guarda un nuevo aprendiz en la base de datos
| - show: Muestra los detalles de un aprendiz específico
| - edit: Muestra el formulario para editar un aprendiz
| - update: Actualiza los datos de un aprendiz
| - destroy: Elimina un aprendiz del sistema
*/

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');          // Lista todos los aprendices
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');  // Formulario de creación
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');    // Guarda nuevo aprendiz
Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show'); // Muestra detalles
Route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update'); // Actualiza datos
Route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy'); // Elimina aprendiz
Route::get('apprentices/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit'); // Formulario de edición

/*
|--------------------------------------------------------------------------
| Rutas para la gestión de Áreas
|--------------------------------------------------------------------------
|
| Rutas para administrar las áreas de formación:
| - index: Lista todas las áreas
| - create: Formulario para nueva área
| - store: Guarda nueva área
| - show: Detalles de área
| - edit: Edición de área
| - update: Actualiza área
| - destroy: Elimina área
*/

Route::get('areas', [AreaController::class, 'index'])->name('area.index');          // Lista todas las áreas
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');  // Formulario de creación
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');    // Guarda nueva área
Route::get('areas/{area}', [AreaController::class, 'show'])->name('area.show');     // Muestra detalles
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');    // Actualiza datos
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy'); // Elimina área
Route::get('areas/{area}/editar',[AreaController::class,'edit'])->name('area.edit'); // Formulario de edición

/*
|--------------------------------------------------------------------------
| Rutas para la gestión de Computadores
|--------------------------------------------------------------------------
|
| Rutas para administrar los computadores del sistema:
| - index: Lista todos los computadores
| - create: Formulario para nuevo computador
| - store: Guarda nuevo computador
| - show: Detalles de computador
| - edit: Edición de computador
| - update: Actualiza computador
| - destroy: Elimina computador
*/

Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');          // Lista todos los computadores
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');  // Formulario de creación
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');    // Guarda nuevo computador
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('computer.show'); // Muestra detalles
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update'); // Actualiza datos
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy'); // Elimina computador
Route::get('computers/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit'); // Formulario de edición

/*
|--------------------------------------------------------------------------
| Rutas para la gestión de Cursos
|--------------------------------------------------------------------------
|
| Rutas para administrar los cursos del sistema:
| - index: Lista todos los cursos
| - create: Formulario para nuevo curso
| - store: Guarda nuevo curso
| - show: Detalles de curso
| - edit: Edición de curso
| - update: Actualiza curso
| - destroy: Elimina curso
*/

Route::get('courses', [CourseController::class, 'index'])->name('course.index');          // Lista todos los cursos
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');  // Formulario de creación
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');    // Guarda nuevo curso
Route::get('courses/{course}', [CourseController::class, 'show'])->name('course.show');   // Muestra detalles
Route::put('course/{course}',[CourseController::class,'update'])->name('course.update');   // Actualiza datos
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy'); // Elimina curso
Route::get('courses/{course}/editar',[CourseController::class,'edit'])->name('course.edit'); // Formulario de edición

/*
|--------------------------------------------------------------------------
| Rutas para la gestión de Profesores
|--------------------------------------------------------------------------
|
| Rutas para administrar los profesores del sistema:
| - index: Lista todos los profesores
| - create: Formulario para nuevo profesor
| - store: Guarda nuevo profesor
| - show: Detalles de profesor
| - edit: Edición de profesor
| - update: Actualiza profesor
| - destroy: Elimina profesor
*/

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');          // Lista todos los profesores
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');  // Formulario de creación
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');    // Guarda nuevo profesor
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');  // Muestra detalles
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update'); // Actualiza datos
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy'); // Elimina profesor
Route::get('teachers/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit'); // Formulario de edición

/*
|--------------------------------------------------------------------------
| Rutas para la gestión de Centros de Formación
|--------------------------------------------------------------------------
|
| Rutas para administrar los centros de formación:
| - index: Lista todos los centros
| - create: Formulario para nuevo centro
| - store: Guarda nuevo centro
| - show: Detalles de centro
| - edit: Edición de centro
| - update: Actualiza centro
| - destroy: Elimina centro
*/

Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');          // Lista todos los centros
Route::get('trainingcenter/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');  // Formulario de creación
Route::post('trainingcenter/store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');    // Guarda nuevo centro
Route::get('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'show'])->name('trainingcenter.show'); // Muestra detalles
Route::put('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'update'])->name('trainingcenter.update'); // Actualiza datos
Route::delete('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'destroy'])->name('trainingcenter.destroy'); // Elimina centro
Route::get('trainingcenters/{trainingcenter}/editar',[TrainingCenterController::class,'edit'])->name('trainingcenter.edit'); // Formulario de edición
