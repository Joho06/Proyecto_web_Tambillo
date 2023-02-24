
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="card">
      <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/usuario.png);background-repeat: no-repeat;background-size: cover;">
        <div class="content">
          <i class="fab fa-windows"></i>
          <h3>Gestionar Usuario</h3>
        </div>
      </div>
      <div class="face face2" >
        <div class="content" >
          <p> En este apartado se puede crear un nuevo negocio para el GAD tambillo</p>
          <a href="{{route('admin.general.indexusuario') }}" type="button">Usuario</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="face face1 " style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/negocio.png);background-repeat: no-repeat;background-size: cover; ">
        <div class="content">
          <i class="fab fa-android"></i>
          <h3>Gestionar negocio</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> En este apartado se podra gestionar a los negocios</p>
          <a href="{{route('admin.general.index_negocio') }}" type="button">Negocio</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/producto.png);background-repeat: no-repeat;background-size: cover;">
        <div class="content">
          <i class="fab fa-apple"></i>
          <h3>Gestionar Producto</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Ver productos existentes</p>
          <a href="{{route('admin.general.index_producto') }}"  type="button text-center">Producto</a>
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
            <p>Volver a la pagina principal</p>
            <a href="/principal"  type="button text-center"> Volver al inicio</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/eliminar.png);background-repeat: no-repeat;background-size: cover;">
          <div class="content">
            <i class="fab fa-apple"></i>
            <h3>Opcion 1</h3>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <p> ..........................</p>
            <a href="#" type="button text-center">Eliminar</a>
          </div>
        </div>
      </div>
    <div class="card">
        <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(img/eliminar.png);background-repeat: no-repeat;background-size: cover;">
          <div class="content">
            <i class="fab fa-apple"></i>
            <h3>Opcion 2</h3>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <p> ..........................</p>
            <a href="#" type="button text-center">Eliminar</a>
          </div>
        </div>
      </div>
  </div>
  

@endsection