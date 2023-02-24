<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = producto::paginate();
        return view('productos.index', compact('producto'));
    }

    public function create(Request $request)
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nombre_producto' => 'required',
        //     'informacion_producto' => 'required',
        //     'valor_producto' => 'required'
        // ]);
        


        producto::create([
            'nombre_producto' => $request->nombre_producto,
            'informacion_producto' =>$request->informacion_producto,
            'valor_producto' => $request->valor_producto
        ]);
        // return('se registro correctamente');
        return redirect()->route('negocios_productos.mostrar');

    }

    public function show($id)
    {
        $producto = producto::find($id);
        return view('negocios_productos.show', compact('producto')); 

    }

    public function edit($id)
    {
        //
    }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }
}
