<?php

namespace App\Http\Controllers;

use App\Models\negocio;
use App\Models\producto;
use App\Models\propietario;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\negocios_productos;

class NegocioController extends Controller
{

    public function index()
    {
        // $negocio = negocio::orderBy('id', 'desc')->paginate();
        // $producto = producto::paginate();
        $negocios = negocio::all();
        $productos = producto::all();
        return view('negocios.index', compact('negocios'), compact('productos'));
    }

    public function create()
    {
        return view('negocios.create');
    }

    public function store(Request $request)
    {
      
        if ($request->hasFile('imagen1')){

            $file = $request->file('imagen1');
             //a la variable le etoy dando un tratado distinto
             $name_imagen1 = time().$file->getClientOriginalName();
            // con test codigo le damos un nombre unico a nuestro archivo guardado en la aplicacion

             $file->move(public_path().'/img/negocios/', $name_imagen1);
             //con este metodo movemos el  archivo, asignamos a donde,en este caso a la carpeta images en la carpeta publica (si no hay esta carpeta se crea por el codigo) y al ultimo le ponemos en nombre del archivo que movemos
           
         }
         if ($request->hasFile('imagen2')){

            $file = $request->file('imagen2');
             //a la variable le etoy dando un tratado distinto
             $name_imagen2 = time().$file->getClientOriginalName();
            // con test codigo le damos un nombre unico a nuestro archivo guardado en la aplicacion

             $file->move(public_path().'/img/negocios/', $name_imagen2);
             //con este metodo movemos el  archivo, asignamos a donde,en este caso a la carpeta images en la carpeta publica (si no hay esta carpeta se crea por el codigo) y al ultimo le ponemos en nombre del archivo que movemos
           
         }
         if ($request->hasFile('imagen3')){

            $file = $request->file('imagen3');
             //a la variable le etoy dando un tratado distinto
             $name_imagen3 = time().$file->getClientOriginalName();
            // con test codigo le damos un nombre unico a nuestro archivo guardado en la aplicacion

             $file->move(public_path().'/img/negocios', $name_imagen3);
             //con este metodo movemos el  archivo, asignamos a donde,en este caso a la carpeta images en la carpeta publica (si no hay esta carpeta se crea por el codigo) y al ultimo le ponemos en nombre del archivo que movemos
           
         }

        $this->validate($request, [
            'nombre_negocio' => 'required',
            'informacion_negocio' => 'required',
            'ruc_negocio' => 'required|max:13',
            'telefono_negocio' => 'required|max:10',
            'direccion_negocio' => 'required',
            'correo_negocio' => 'required',
            'nombre_producto' => 'required',
            'imagen1' => '',
            'imagen2' => '',
            'imagen3' => '',
            'video1' => '',
            'video2' => '',

        ]);



        negocio::create([


            'nombre_negocio' => $request->nombre_negocio,
            'informacion_negocio' => $request->informacion_negocio,
            'ruc_negocio' => $request->ruc_negocio,
            'telefono_negocio' => $request->telefono_negocio,
            'direccion_negocio' => $request->direccion_negocio,
            'correo_negocio' => $request->correo_negocio,
            'nombre_producto' => $request->nombre_producto,
            'imagen1' => $name_imagen1,
            'imagen2' => $name_imagen2,
            'imagen3' => $name_imagen3,
            'video1' => $request->video1,
            'video2' => $request->video2,

        ]);
        // return('se registro correctamente');
        return redirect()->route('negocios_productos.index');




        // $request->validate([
        //     'nombre_negocio' => 'required|max:value',
        //     'telefono_negocio' => 'required ',
        //     'ruc_negocio' => 'required|min:10',
        // ]);

        // $negocio = new negocio();
        // $negocio->nombre_negocio = $request->nombre_negocio;
        // $negocio->ruc_negocio = $request->ruc_negocio;
        // $negocio->telefono_negocio = $request->telefono_negocio;
        // $negocio->correo_negocio = $request->correo_negocio;
        // $negocio->direccion_negocio = $request->direccion_negocio;
        // $negocio->informacion_negocio = $request->informacion_negocio;
        // $negocio->save();
        // return redirect()->route('negocios_productos.show', $negocio);

    }

    public function show($id)
    {
        // $negocio = negocio::find($id);
        //      $negocio = negocio::with('nombre_producto')->get($id);
        //      return $negocio;
        // return view('negocios.show', compact('negocio'));
    }

    public function edit(negocio $negocio)
    {
        return view('negocios.edit', compact('negocio'));
        // return $negocios;
    }

    public function update(Request $request, negocio $negocio)
    {
        $negocio->nombre_negocio = $request->nombre_negocio;
        $negocio->ruc_negocio = $request->ruc_negocio;
        $negocio->telefono_negocio = $request->telefono_negocio;
        $negocio->correo_negocio = $request->correo_negocio;
        $negocio->direccion_negocio = $request->direccion_negocio;
        $negocio->informacion_negocio = $request->informacion_negocio;

        $negocio->save();
        return redirect()->route('negocios.show', $negocio);
    }

    public function destroy(negocio $negocio)
    {
        $negocio->delete($negocio);
    }
}
