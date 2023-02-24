@extends('layouts.plantilla')

@section('title', 'Producto')


@section('header')
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-7">
            <a class="navbar-brand" href="#!">
                <img style=" height: 5px; width: 5%; height: auto" class="img-responsive" class="ms-5"
                    src="assets/test.jpg" alt="Negocios" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="/principal">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                             href="/negocios_productos">Negocios</a></li>
                   
                    <!-- Botones de login y registrarse-->
                    {{-- <li class="nav-item"><a class="nav-link">Login</a></li>
                    <li class="nav-item"><a class="nav-link">Registrarse</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</body>
@endsection

{{-- @php
use App\Models\negocio;
    $negocios = negocio::find($id);
@endphp --}}


@section('content')

    <main class="container">

        <img src="{{ asset('img/negocios/' . $negocios->imagen1) }}" alt="imagen"   height="375px">

        <div class="row">
            <div class="col-md-12">
                <div class="bg-light">
                    <div class="col-md-12 px-0">
                        <h1 class="display-1 fst-italic-bold text-uppercase">{{ $negocios->nombre_negocio }}</h1>
                    </div>
                </div>
                <h3 class="pb-4 mb-4 fst-italic border-bottom text-uppercase">
                    <p>{{ $negocios->informacion_negocio }}</p>
                        {{-- <p class="lead mb-0"><a href="" class="text-white fw-bold">Contactos</a></p> --}}
                </h3>
                <div class="row  p-5">
                    <div class="col-md-6 ">
                        <img src="{{ asset('img/negocios/' . $negocios->imagen2) }}" alt="imagen"   height="350px" class="mx-auto d-block ">
                    </div>
                    <div class="col-md-6  body-center">
                        <img src="{{ asset('img/negocios/' . $negocios->imagen3) }}" alt="imagen"   height="350px" class="mx-auto d-block">
                    </div>
                  </div>
            </div>
            <div class="col-md-12 p-3">
                <div class="bg-light">
                    <div class="col-md-12 px-0">
                        <h1 class="display-6 fst-italic-bold text-uppercase text-center">Video del local</h1>
                        <div  class="col-md-6 ratio" style="--bs-aspect-ratio: 50%;" width="200px" height="500px">
                            <iframe width="560" height="315" src="{{ $negocios->video1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                          </div>
                    </div>
                    <h3 class="pb-12 mb-12 p-3 fst-italic border-bottom">
                        Conoce un poco mas de sus productos
                    </h3>
            <div class="grid text-center p-5">

    
                    <div class="g-col-6">

                        <div class="row mb-1">

                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                                <div class="col p-4 d-flex flex-column position-static">
                                    <h3 class="mb-0">{{ $negocios->nombre_producto}}</h3>
                                    {{-- <div class="mb-1 text-muted">{{ $negocios->informacion_negocio }}</div>
                                    <p class="card-text mb-auto">{{ $negocios->informacion_negocio }}</p> --}}
                                {{-- // <a href="{{ route('productos.show', $negocios->id) }}" class="stretched-link"></a> --}}
                                </div>

                                <div class="col-auto d-none d-lg-block">
                                    <img src="{{ asset('img/negocios/' . $negocios->imagen1) }}" alt="imagen"  width="250px" height="250px">
                                    {{-- <svg class="bd-placeholder-img" width="200" height="250"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>nombre_imagen</title>
                                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%"
                                            y="50%" fill="#eceeef" dy=".3em">IMAGEN</text>
                                    </svg> --}}
                                </div>

                            </div>

                                </div>

                            </div>

                
                        </div>
                    </div>
            
        </div>

        
    </main>

@endsection
