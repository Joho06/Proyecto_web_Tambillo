@extends('layouts.plantilla')

@section('title', 'Crear Negocio')

@section('content')

<body class="text-center">

<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong p-4" style="border-radius: 1rem;">
                        <h4 class="mb-3">CREAR NUEVO ESTABLECIMIENTO</h4>
                        <form class="needs-validation" action="{{ route('negocios.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <label for="nombre_negocio" class="form-label">
                                        NOMBRE
                                    </label>
                                    <input
                                        id="nombre_negocio"
                                        name="nombre_negocio"
                                        type="text"
                                        placeholder="Ingrese el nombre del establecimiento"
                                        class="form-control @error('nombre_negocio') border border-danger @enderror" 
                                        value="{{ old('nombre_negocio') }}"
                                    />
                                </div>

                                <div class="col-sm-6">
                                     <label for="ruc_negocio" class="form-label">
                                        RUC
                                    </label>
                                    <input 
                                        id="ruc_negocio"
                                        name="ruc_negocio"
                                        type="text"
                                        placeholder="Ingrese el RUC del establecimiento"
                                        class="form-control @error('ruc_negocio') border border-danger @enderror" 
                                        value="{{ old('ruc_negocio') }}"
                                    />
                                </div>

                                <div class="col-sm-6">
                                    <label for="direccion_negocio" class="form-label">
                                        DIRECCIÓN
                                    </label>
                                    <input
                                        id="direccion_negocio"
                                        name="direccion_negocio"
                                        type="text"
                                        placeholder="Ingrese la dirección del establecimiento"
                                        class="form-control @error('direccion_negocio') border border-danger @enderror" 
                                        value="{{ old('direccion_negocio') }}"
                                    />

                                </div>
                                <div class="col-sm-6">
                                    <label for="telefono_negocio" class="form-label">
                                        TELÉFONO
                                    </label>
                                    <input 
                                        id="telefono_negocio"
                                        name="telefono_negocio"
                                        type="text"
                                        placeholder="Ingrese su número de celular"
                                        class="form-control @error('telefono_negocio') border border-danger @enderror" 
                                        value="{{ old('telefono_negocio') }}"
                                    />
                                </div>
                                <br>
                                <div class="col-sm-6">
                                    <label for="informacion_negocio" class="form-label">
                                        INFORMACIÓN 
                                    </label>
                                    <input 
                                        id="informacion_negocio"
                                        name="informacion_negocio"
                                        type="comment"
                                        placeholder="Escribe una descripción de tu establecimiento"
                                        class="form-control @error('informacion_negocio') border border-danger @enderror" 
                                        value="{{ old('informacion_negocio') }}"
                                    />
                                </div>

                                <div class="col-sm-6">
                                    <label for="nombre_producto" class="form-label">
                                        PRODUCTOS
                                    </label>
                                    <input
                                        id="nombre_producto"
                                        name="nombre_producto"
                                        type="text"
                                        placeholder="Ingrese los productos"
                                        class="form-control"
                                    />
                                </div>
                                
                                <div class="col-sm-12" class="text-center">
                                        <label for="correo_negocio" class="form-label">
                                            EMAIL
                                        </label>
                                        <input 
                                            id="correo_negocio"
                                            name="correo_negocio"
                                            type="text"
                                            placeholder="Ingrese el correo electrónico"
                                            class="form-control @error('correo_negocio') border border-danger @enderror" 
                                            value="{{ old('correo_negocio') }}"
                                        />
                                    </div>
                                    <div class="col-12">
                                    <label for="imagen1" class="form-label">
                                        Imagen 1
                                    </label>
                                    <input 
                                        id="imagen1"
                                        name="imagen1"
                                        type="file"
                                        class=" @error('imagen1') border border-danger @enderror" 
                                        value="{{ old('imagen1') }}"
                                    />
                                </div>
                                <div class="col-12">
                                    <label for="imagen2" class="form-label">
                                        Imagen 2
                                    </label>
                                    <input 
                                        id="imagen2"
                                        name="imagen2"
                                        type="file"
                                        class=" @error('imagen2') border border-danger @enderror" 
                                        value="{{ old('imagen2') }}"
                                    />
                                </div>
                                <div class="col-12">
                                    <label for="imagen3" class="form-label">
                                        Imagen 3
                                    </label>
                                    <input 
                                        id="imagen3"
                                        name="imagen3"
                                        type="file"
                                        class=" @error('imagen3') border border-danger @enderror" 
                                        value="{{ old('imagen3') }}"
                                    />
                                </div>
                                <div class="col-12">
                                    <label for="video1" class="form-label">
                                        link del video
                                    </label>
                                    <input 
                                        id="video1"
                                        name="video1"
                                        type="text"
                                        class="form-control @error('video1') border border-danger @enderror" 
                                        value="{{ old('video1') }}"
                                    />
                                </div>

                            </div>
                            
                            

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">GUARDAR</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </body>
@endsection
