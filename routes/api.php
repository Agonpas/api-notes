<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantController;
use App\Http\Controllers\AssignaturaController;
use App\Http\Controllers\NotaController;

Route::resource('estudiants', EstudiantController::class);
Route::resource('assignatures', AssignaturaController::class);
Route::resource('notes', NotaController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
