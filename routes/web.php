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
