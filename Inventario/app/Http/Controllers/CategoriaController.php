<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validar los datos de la solicitud entrando usando reglas de validación
        $request->validate([
            'nombre' => 'required|string|max:45'
        ]);
        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        $categoria->save();

        $categorias = Categoria::all();
        return Redirect::route('index.categorias');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json([
                'message' => 'Categoria no encontrado',
                'status' => 404
            ], 404);
        }

        return response()->json($categoria, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria_editar = Categoria::find($id);
        return view('categorias.edit', compact('categoria_editar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria_editar = Categoria::find($id);
        //validar los datos de la solicitud entrando usando reglas de validación
        $validated = $request->validate([
            'nombre' => 'required|string|max:45'
        ]);


        $categoria_editar->update([
            'nombre' => $validated['nombre']
        ]);

        return Redirect::route('index.categorias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categoria::destroy($id);
        return Redirect::route('index.categorias');
    }
}
