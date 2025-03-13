<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedore::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validar los datos de la solicitud entrando usando reglas de validación
        $request->validate([
            'nombre' => 'required|string|max:45',
            'correo' => 'required|string|max:45',
            'telefono' => 'required|string|max:45'
        ]);
        $proveedor = new Proveedore();

        $proveedor->nombre = $request->nombre;
        $proveedor->correo_contacto = $request->correo;
        $proveedor->telefono = $request->telefono;
        $proveedor->save();

        $proveedores = Proveedore::all();
        return Redirect::route('index.proveedores');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proveedor_editar = Proveedore::find($id);
        return view('proveedores.edit', compact('proveedor_editar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor_editar = Proveedore::find($id);
        //validar los datos de la solicitud entrando usando reglas de validación
        $validated = $request->validate([
            'nombre' => 'required|string'
        ]);


        $proveedor_editar->update([
            'nombre' => $validated['nombre']
        ]);

        return Redirect::route('index.proveedores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Proveedore::destroy($id);

        return Redirect::route('index.proveedores');
    }
}
