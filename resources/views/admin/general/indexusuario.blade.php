@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="card">
      <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/usuagre.png);background-repeat: no-repeat;background-size: cover;">
        <div class="content">
          <i class="fab fa-windows"></i>
          <h3>Agregar Usuario</h3>
        </div>
      </div>
      <div class="face face2" >
        <div class="content" >
          <p> En este apartado se puede crear un nuevo Usuario para el GAD tambillo</p>
          <a href="#" type="button">Crear</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="face face1 " style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/usumod.png);background-repeat: no-repeat;background-size: cover; ">
        <div class="content">
          <i class="fab fa-android"></i>
          <h3>Modificar Usuario</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> En este apartado se puede modificar el Usuario </p>
          <a href="#" type="button">Agregar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/usuaeli.png);background-repeat: no-repeat;background-size: cover;">
        <div class="content">
          <i class="fab fa-apple"></i>
          <h3>Eliminar Usuario</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Eliminar un Usuario existente</p>
          <a href="#" type="button text-center">Eliminar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/principal.png);background-repeat: no-repeat;background-size: cover;">
        <div class="content">
          <i class="fab fa-apple"></i>
          <h3>Volver</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Volver al admin</p>
          <a href="{{route('admin.general.index') }}" type="button text-center">Volver</a>
        </div>
      </div>
    </div>
  </div>

@endsection