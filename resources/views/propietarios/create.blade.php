@extends('layouts.plantilla')

@section('title', 'CREAR PROPIETARIO')

@section('content')


<div class="container">
    <main>
        <div class="row g-4">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">REGISTRO DE NUEVO PROPIETARIO</h4>
                <form class="needs-validation" action="{{ route('propietarios.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label for="nombre_propietario" class="form-label">
                                NOMBRES
                            </label>
                            <input
                                id="nombre_propietario"
                                name="nombre_propietario"
                                type="text"
                                placeholder="Ingrese sus nombres"
                                class="form-control"
                            />
                        </div>

                        <div class="col-sm-6">
                            <label for="apellido_propietario" class="form-label">
                                APELLIDOS
                            </label>
                            <input
                                id="apellido_propietario"
                                name="apellido_propietario"
                                type="text"
                                placeholder="Ingrese sus apellidos"
                                class="form-control"
                            />
                        </div>

                        <div class="col-sm-6">
                             <label for="cedula_propietario" class="form-label">
                                CEDULA
                            </label>
                            <input 
                                id="cedula_propietario"
                                name="cedula_propietario"
                                type="text"
                                placeholder="Digite su n??mero de c??dula"
                                class="form-control"
                            />
                        </div>

                        <div class="col-sm-6">
                            <label for="telefono_propietario" class="form-label">
                                TEL??FONO
                            </label>
                            <input 
                                id="telefono_propietario"
                                name="telefono_propietario"
                                type="text"
                                placeholder="Ingrese su n??mero de celular"
                                class="form-control"
                            />
                        </div>

                        <div class="col-12">
                            <label for="correo_propietario" class="form-label">
                                EMAIL
                            </label>
                            <input 
                                id="correo_propietario"
                                name="correo_propietario"
                                type="email"
                                placeholder="Ingrese el correo electr??nico"
                                class="form-control"
                            />
                        </div>

                        <div class="col-12">
                            <label for="direccion_negocio" class="form-label">
                                DIRECCI??N
                            </label>
                            <input
                                id="direccion_negocio"
                                name="direccion_negocio"
                                type="text"
                                placeholder="Ingrese la direcci??n del establecimiento"
                                class="form-control"
                            />                            
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">
                                CONTRASE??A
                            </label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="Ingrese su contrase??a"
                                class="form-control"
                            />                            
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="btn btn-primary" type="submit">GUARDAR</button>
                    <button class="btn btn-primary" type="submit">CANCELAR</button>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection
