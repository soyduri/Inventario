<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Proveedore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedore::all();
        $categorias = Categoria::all();
        return view('productos.create', compact('proveedores', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $productos = Producto::all();

        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'string',
            'precio' => 'required|int',
            'cantidad' => 'required|int',
            'proveedor' => 'string',
            'categoria' => 'string'
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->proveedor_id = $request->proveedor;
        $producto->categoria_id = $request->categoria;
        $producto->save();
        return Redirect::route('index.productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        return view('productos.detalles', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto_editar = Producto::find($id);
        $proveedores = Proveedore::all();
        $categorias = Categoria::all();
        return view('productos.edit', compact('proveedores', 'categorias', 'producto_editar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto_editar = Producto::find($id);
        //validar los datos de la solicitud entrando usando reglas de validación
        $validated = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'string',
            'cantidad' => 'required|string',
            'proveedor' => 'string',
            'categoria' => 'string',
        ]);

        $producto_editar->update([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'],
            'cantidad' => $validated['cantidad'],
            'proveedor_id' => $validated['proveedor'],
            'categoria_id' => $validated['categoria'],
        ]);

        return Redirect::route('index.productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::destroy($id);
        return Redirect::route('index.productos');
    }
}
