@extends('layouts.plantilla')

@section('title', 'EDITAR NEGOCIO')

@section('content')

    <body class="bg-light">
        <div class="container center">
            <main>
                <div class="row g-4">
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">EDITAR DATOS DEL NEGOCIO</h4>
                        <form class="needs-validation" action="{{ route('negocios.update', $negocio) }}" method="post">

                            @csrf

                            @method('put')

                            <div class="row g-3">
                                {{-- ============================================================================================================ --}}
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">NOMBRE</label>
                                    <input type="text" class="form-control" name="nombre_negocio" placeholder=""
                                        value="{{ $negocio->nombre_negocio }}" required>
                                    <div class="invalid-feedback">
                                        Con tu nombre te identificaremos mejor.
                                    </div>
                                </div>
                                {{-- ============================================================================================================ --}}
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">RUC</label>
                                    <input type="text" class="form-control" name="ruc_negocio"
                                        value="{{ $negocio->ruc_negocio }}">
                                </div>
                                @error('ruc_negocio')
                                    <br>
                                    <small>*{{ $message }}</small>
                                    <br>
                                @enderror

                                <div class="col-12">
                                    <label for="address" class="form-label">DIRECCIÓN</label>
                                    <input type="text" class="form-control" name="direccion_negocio"
                                        value="{{ $negocio->direccion_negocio }}" required>
                                    <div class="invalid-feedback">
                                        Con esta informacion te ubicaremos mejor.
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">E-MAIL</label>
                                        <input type="email" class="form-control" name="correo_negocio"
                                            value="{{ $negocio->correo_negocio }}">
                                        <div class="invalid-feedback">
                                            Ingresa un correo valido por favor.
                                        </div>
                                    </div>
                                    {{-- ============================================================================================================ --}}
                                </div>
                                <div class="col-12">
                                    <label for="zip" class="form-label">TELÉFONO</label>
                                    <input type="text" class="form-control" name="telefono_negocio"
                                        value="{{ $negocio->telefono_negocio }}" required>
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                                <br>
                                {{-- ============================================================================================================ --}}
                                <div class="col-12">
                                    <label for="firstName" class="form-label">DESCRIPCIÓN</label>
                                    <input type="text" class="form-control" name="informacion_negocio"
                                        value="{{ $negocio->informacion_negocio }}" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">ACTUALIZAR</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </body>
@endsection
