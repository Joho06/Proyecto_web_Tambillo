@extends('layouts.plantilla')

@section('title', 'Crear cuenta')
    {{-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> --}}


@section('content')

  <body class="text-center">

    <section class="vh-100" style="background-color: #508bfc;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">

                    <form action="{{ route('registro') }}" method="POST" novalidate>
                        @csrf
                        <div class="row m-3">
                            <h3 class="mb-5 fw-bolder">REGISTRARSE</h3>
        
                            <div class="form-outline col-md-6 mb-4">
                            <label for="name" class="form-label fw-bolder text-secondary text-uppercase">
                                Nombres
                            </label>
                            <input 
                                id="name"
                                name="name"
                                type="text" 
                                placeholder="Nombres completos"
                                class="mb-1 form-control @error('name') border border-danger @enderror" 
                                value="{{ old('name') }}"
                            />
        
                            {{-- Error con la regla vaidate en store RegisterController--}}
                            @error('name')
                                <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
        
                        <div class="form-outline col-md-6 mb-4">
                            <label for="lastname" class="form-label fw-bolder text-secondary text-uppercase">
                                Apellidos
                            </label>
                            <input 
                                id="lastname"
                                name="lastname"
                                type="text" 
                                placeholder="Apellidos completos"
                                class="mb-1 form-control @error('lastname') border border-danger @enderror" 
                                value="{{ old('lastname') }}"
                            />
        
                            @error('lastname')
                                <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                    {{ $message }}
                                </p>  
                            @enderror                            
                        </div>
        
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label fw-bolder text-secondary text-uppercase">
                                Email
                              </label>
                            <input 
                                id="email"
                                name="email"
                                type="email" 
                                placeholder="Escriba su correo electrónico"
                                class="mb-1 form-control @error('email') border border-danger @enderror" 
                                value="{{ old('email') }}"
                            />
        
                            @error('email')
                                <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
        
                        <div class="form-outline mb-4">
                            <label id="password" for="password_confirmation" class="form-label fw-bolder text-secondary text-uppercase">
                                Contraseña
                            </label>
                            <input 
                                id="password"
                                name="password"
                                type="password" 
                                placeholder="Escriba su contraseña"
                                class="mb-1 form-control @error('password') border border-danger @enderror" 
                            />
        
                            @error('password')
                                <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
        
                        <div class="form-outline mb-4">
                            <label for="password" class="form-label fw-bolder text-secondary text-uppercase">
                                Repetir Contraseña
                            </label>
                            <input 
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password" 
                                placeholder="Repita su contraseña"
                                class="mb-4 form-control"
                            />
        
                            <input 
                                type="submit" 
                                value="CREAR CUENTA" 
                                class="btn btn-primary btn-block mb-4 fw-bolder"
                            />
        
                            <hr class="my-4">
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
@endsection

