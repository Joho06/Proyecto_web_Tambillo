@extends('layouts.plantilla')

@section('title', 'CREAR PRODUCTO')

@section('content')
    <!-- Custom styles for this template -->

    <body class="bg-light">
        <div class="container">
            <main>
                <div class="row g-4">

                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">CREAR NUEVO PRODUCTO</h4>
                            <form class="needs-validation" action="{{ route('productos.store') }}" method="POST">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="nombre_producto" class="form-label">
                                            NOMBRE DEL PRODUCTO
                                        </label>
                                        <input
                                            id="nombre_producto"
                                            name="nombre_producto"
                                            type="text"
                                            placeholder="Ingrese el nombre del producto"
                                            class="form-control"
                                        />
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="valor_producto" class="form-label">
                                            VALOR DEL PRODUCTO
                                        </label>
                                        <input
                                            id="valor_producto"
                                            name="valor_producto"
                                            type="number"
                                            step="any"
                                            value="0.00"
                                            class="form-control"
                                        />
                                    </div>

                                    <div class="col-12">
                                        <label for="informacion_producto" class="form-label">
                                            DESCRIPCIÓN DEL PRODUCTO
                                        </label>
                                        <input
                                            id="informacion_producto"
                                            name="informacion_producto"
                                            type="text"
                                            placeholder="Ingrese la información del producto"
                                            class="form-control"
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
    @endsection
