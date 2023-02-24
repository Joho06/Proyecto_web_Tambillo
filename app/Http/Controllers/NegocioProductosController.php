<?php

namespace App\Http\Controllers;

use App\Models\negocio;
use App\Models\negocios_productos;
use App\Models\producto;

class NegocioProductosController extends Controller
{
    public function index()
    {
        // $negocio = negocio::orderBy('id', 'desc')->paginate();
        // $producto = producto::paginate();
        $negocios = negocio::all();
        // $producto = producto::all();
        return view('negocios_productos.index', compact('negocios'));

    }

    public function create()
    {
        return view('negocios.create');
    }

    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'nombre_negocio' => 'required|max:value',
    //         'telefono_negocio' => 'required ',
    //         'ruc_negocio' => 'required|min:10',
    //     ]);

    //     $negocio = new negocios_productos();
    //     $negocio->negocio_id = $request->negocio_id;
    //     $negocio->producto_id = $request->producto_id;

    //     $negocio->save();
    //     return redirect()->route('negocios_productos.show', $negocio);

    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $negocios = negocio::find($id);
        // dd($negocios);
        // $producto = producto::all();
        return view('negocios_productos.show', compact('negocios'));
    }

    // public function edit(negocios_productos $negocio)
    // {
    //     return view('negocios.edit', compact('negocio'));
    //     // return $negocios;
    // }

    // public function update(Request $request, negociosProductos $negocio)
    // {
    //     $negocio->nombre_negocio = $request->nombre_negocio;
    //     $negocio->ruc_negocio = $request->ruc_negocio;
    //     $negocio->telefono_negocio = $request->telefono_negocio;
    //     $negocio->correo_negocio = $request->correo_negocio;
    //     $negocio->direccion_negocio = $request->direccion_negocio;
    //     $negocio->informacion_negocio = $request->informacion_negocio;

    //     $negocio->save();
    //     return redirect()->route('negocios.show', $negocio);
    // }

    // public function destroy(negocios_productos $negocio)
    // {
    //     $negocio->delete($negocio);

    // }
}
