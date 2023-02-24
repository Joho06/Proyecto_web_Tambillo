@extends('layouts.plantilla')

@section('title', 'PRODUCTO '. $producto->nombre_producto)

@section('content')

<div class="alert alert-success" role="alert">
    <h1> PEL PRODUCTO {{ $producto->nombre_producto }} , FUE CREADO CON EXITO</h1>
  </div>



@endsection

