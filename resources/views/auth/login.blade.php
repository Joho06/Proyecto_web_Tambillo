@extends('layouts.plantilla')

@section('title', 'Iniciar sesión')

@section('content')

<body class="text-center">

<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">

                    <form action="{{ route('login') }}" method="POST" novalidate>
                        @csrf

                        <div class="row m-3">
                            <h3 class="mb-5 fw-bolder">LOGIN</h3>
                            

                            @if (session('mensaje'))
                                <p class="form-control badge bg-danger text-center fw-normal">
                                    {{ session('mensaje') }}
                                </p>
                            @endif

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
                                    class="mb-4 form-control @error('password') border border-danger @enderror" 
                                />
            
                                @error('password')
                                    <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                        {{ $message }}
                                    </p>
                                @enderror
    
                                <input 
                                    type="submit" 
                                    value="INICIAR SESIÓN" 
                                    class="btn btn-primary btn-block mb-4 fw-bolder"
                                />
    
                                <hr class="my-4">
                            </div>
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

