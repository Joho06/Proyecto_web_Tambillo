@extends('layouts.plantilla')

@section('title', 'Negocios')

@section('header')

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-7">
                <a class="navbar-brand" href="#!">
                    <img style=" height: 5px; width: 5%; height: auto " class="img-responsive" class="ms-5" src="{{ asset('img/tambillo.jpg') }}" alt="Logo" />
                    Negocios
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/principal">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/negocios_productos">
                                Negocios
                            </a>
                        </li>

                        <li class="nav-item">
                            @auth
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf

                                    <button type="submit" class="btn btn-outline-light btn-sm ms-5 mt-1 text-uppercase fw-bolder">Salir</button>
                                </form>
                            @endauth
                        </li>
                        
                        
                        <!-- Botones de login y registrarse-->
                        {{-- <li class="nav-item"><a class="nav-link">Login</a></li>
                        <li class="nav-item"><a class="nav-link">Registrarse</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </body>

@endsection

@section('content')


    <main>

        <section class="container p-5">


                    <div class="col-md-12   px-0">
                        <div  class="col-md-6 ratio" style="--bs-aspect-ratio: 50%;" width="200px" height="500px">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/dlZIeenNVIo?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                          </div>
                    </div>
                    {{-- <h1 class="display-4 fst-italic ">TAMBILLO</h1>
                    <p class="lead my-10 text-center">La parroquia de Tambillo se ubica al norte del cantón de Mejía en la
                        provincia de pichincha, con una gran variedad de comercios por haber sido una de las estaciones
                        principales del tren de Alfaro, los ingresos de muchos residentes dependían del ferrocarril. Esta
                        característica fue confirmada una vez más por la construcción de Panamericana, actualmente ubicada
                        en el cruce de tres carreteras: el ferrocarril, la Carretera Nacional Panamericana y la carretera
                        general de Rumiñahui </p>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p> --}}

        </section>

        {{-- ============================= CONTENIDO DE TARJETAS DE CADA NEGOCIO --}}
        <div class="text-center container">
            <h1>COMERCIOS TAMBILLO</h1>
            <p class="display-6 lead my-10">En esta pequeña comunidad encontrará además de unas hermosas vistas, muchos
                tipos
                de comercios y productos interesantes de la region, con gente amable dispuesto a ayudarle...</p>
        </div>


        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach ($negocios as $negocios)
                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: IMAGEN"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">IMAGEN</text>
                                </svg> --}}
                                <img src="{{ asset('img/negocios/' . $negocios->imagen1) }}" alt="imagen" height="350px">
                                <div class="card-body">
                                    <h3>{{ $negocios->nombre_negocio }}</h3>
                                    <p class="card-text">{{ $negocios->informacion_negocio }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"> <a
                                                    href="{{ route('negocios_productos.mostrar', $negocios->id) }}">Informacion</a></button>
                                        </div>
                                        <small class="text-muted">{{ $negocios->updated_at }} </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- {{ $negocios->links() }} --}}

    </main>
@endsection
