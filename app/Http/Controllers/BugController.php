<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use Illuminate\Http\Request;

class BugController extends Controller
{
    /**
     * 1. Listado de bugs (Index) - 20 pts (Controlador completo)
     */
    public function index() {
        // Obtenemos los bugs ordenados por el más reciente
        $bugs = Bug::orderBy('created_at', 'desc')->get();
        return view('bugs.index', compact('bugs'));
    }

    /**
     * 2. Mostrar formulario de creación (Create)
     */
    public function create() {
        return view('bugs.create');
    }

    /**
     * 3. Guardar el bug en la base de datos (Store)
     */
    public function store(Request $request) {
        // Validaciones requeridas por la rúbrica
        $request->validate([
            'titulo' => 'required|max:100',
            'area' => 'required',
            'gravedad' => 'required',
            'pasos' => 'required'
        ]);

        // Guardar registro
        Bug::create($request->all());

        return redirect()->route('bugs.index')->with('success', '¡Bug reportado con éxito para PixelForge!');
    }

    /**
     * 4. Mostrar formulario de edición (Edit)
     */
    public function edit(Bug $bug) {
        return view('bugs.edit', compact('bug'));
    }

    /**
     * 5. Actualizar los datos (Update)
     */
    public function update(Request $request, Bug $bug) {
        // Validamos que el estado sea enviado correctamente
        $request->validate([
            'titulo' => 'required|max:100',
            'estado' => 'required'
        ]);

        // Actualización física en la base de datos
        $bug->update($request->all());

        // Redireccionamos a la tabla principal con mensaje de éxito
        return redirect()->route('bugs.index')->with('success', 'El estado del bug ha sido actualizado correctamente.');
    }
}