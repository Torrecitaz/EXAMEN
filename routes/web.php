<?php

use App\Http\Controllers\BugController;
use Illuminate\Support\Facades\Route;

// Redireccionar la raíz al listado de bugs
Route::get('/', function () {
    return redirect()->route('bugs.index');
});

// Ruta de recurso para generar automáticamente todas las rutas del CRUD
Route::resource('bugs', BugController::class);