<?php

namespace App\Http\Controllers;
use App\Models\propietario;

use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index()
    {
        $propietario = propietario::paginate();
       return view('propietarios.index', compact('propietario'));
    }

    public function create()
    {
       return view('propietarios.create') ;
    }

    // public function store(Request $request)
    // {
    //     //
    // }

    public function store(Request $request)
    {
 
       
        $this->validate($request, [
            'nombre_propietario' => 'required',
            'apellido_propietario' => 'required',
            'cedula_propietario' => 'required|max:10',
            'telefono_propietario' => 'required|max:10',
            'correo_propietario' => 'required',
            'password' => 'required',
        ]);
        


        propietario::create([
            'nombre_propietario' => $request->nombre_propietario,
            'apellido_propietario' =>$request->apellido_propietario,
            'cedula_propietario' => $request->cedula_propietario,
            'telefono_propietario' => $request->telefono_propietario,
            'correo_propietario' => $request->correo_propietario,
            'password' => $request->password,
        ]);
        // return('se registro correctamente');
        return redirect()->route('propietarios.index');

    }

    public function show($id)
    {
        $propietario = propietario::find($id);
        return view('propietarios.show', compact('propietario'));
    }

    // public function edit($id)
    // {
    //     //
    // }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }
}
