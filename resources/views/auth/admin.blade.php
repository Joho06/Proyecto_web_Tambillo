@extends('layouts.plantilla')

@section('title', 'Administrador') --}}
{{--  --}}
    
 @endsection

@section('content')
<body>
    <div class="container">
        <div class="card">
          <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(../img/agregar.png);background-repeat: no-repeat;background-size: cover;">
            <div class="content">
              <i class="fab fa-windows"></i>
              <h3>Agregar Contenido</h3>
            </div>
          </div>
          <div class="face face2" >
            <div class="content" >
              <p> En este apartado se puede crear un nuevo negocio para el GAD tambillo</p>
              <a href="#" type="button">Crear</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="face face1 " style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(../img/modificar.png);background-repeat: no-repeat;background-size: cover; ">
            <div class="content">
              <i class="fab fa-android"></i>
              <h3>Modificar Negocio</h3>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <p> En este apartado se puede modificar el negocio </p>
              <a href="#" type="button">Agregar</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="face face1" style="  background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(../img/eliminar.png);background-repeat: no-repeat;background-size: cover;">
            <div class="content">
              <i class="fab fa-apple"></i>
              <h3>Eliminar Negocio</h3>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <p> Eliminar un negocio existente</p>
              <a href="#" type="button text-center">Eliminar</a>
            </div>
          </div>
        </div>
      </div>
      <script src="https://kit.fontawesome.com/95a02bd20d.js%22%3E"></script>
</body>
@endsection