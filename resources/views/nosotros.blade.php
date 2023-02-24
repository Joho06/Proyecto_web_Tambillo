@extends('layouts.plantilla')

@section('title', 'Sobre nosotros')

@section('content')
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-7">
            <a class="navbar-brand" href="#!">
                <img style=" height: 5px; width: 5%; height: auto" class="img-responsive" class="ms-5 me-3" src="{{ asset('img/tambillo.jpg')}}" alt="Logo" />
                Sobre nosotros
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
                </ul>
            </div>
        </div>
    </nav>
</body> 
    <header>
        
        <div class="container">
            <div class="row">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/img1.jpg') }}" class="d-block w-100" alt="img_1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/img2.png') }}" class="d-block w-100" alt="img_2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" alt="img_3">
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
        </div>
    </header>
    

   




    <main>

        <h1 class="text-center my-3">Autoriades. </h1>
        
        <div class="row py-5">
            <div class="col-lg-7 mx-auto">
    
                <div class="card shadow mb-4">
                    <div class="card-body p-5">
                        <h4 class="mb-4">Tambillo</h4>
                        <!-- Unordered list -->
                        <ul>
                            <li class="mb-2"><strong> PRESIDENTA: </strong>Solís Segura Mirian Malena</li>
                            <li class="mb-2"><strong> VICEPRESIDENTE: </strong> Ocampo Castillo Jeison</li>
                            <li class="mb-2"><strong> SECRETARIA: </strong> Ordoñez Cabezas Tania Elizabeth</li>
                            <li class="mb-2"><strong> VOCAL: </strong> Rincones Ruano Damaris Baldramina</li>
                            <li class="mb-2"><strong> VOCAL: </strong> Perlaza Medina Diego Javier</li>
                            <li class="mb-2"><strong> VOCAL: </strong> Torales Hurtado Falconi</li>
                        </ul>
                    </div>
                </div>
    
                <div class="card shadow mb-4">
                    <div class="card-body p-5">
                        <h4 class="mb-4">Instituto SUCRE</h4>
                        <!-- Unordered list -->
                        <ul>
                            <li class="mb-2"><strong> RECTOR: </strong>Ing. Santiago Illescas Correa, PhD.</li>
                            <li class="mb-2"><strong> Coordindor del Proyecto: </strong>Ing. Richard Cova</li>
                            <li class="mb-2"><strong> Representante de la carrera Desarrollo de Software: </strong>Ing. Patricio Perez</li>
                           
                        </ul>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-body p-5">
                        <h4 class="mb-4">Misión y Visión</h4>
                        <!-- Unordered list -->
                        <ul>
                            <li class="mb-2"><strong>Mision</strong></li>
                            <li class="mb-2">Se establece el presente proyecto como una manera de promover a los PYMES de la actual parroquia de Tambillo. Generar un aumento de visibilidad en los productos propios y de calidad.</li>
                            
                            <li class="mb-2"><strong>Vision</strong></li>
                            <li class="mb-2">Los negocios generaran una mayor productividad y un incremento de ingresos para los negocios que se encuentran en el presente proyecto. Conseguir que los negocios utilizen formas mas adecuados tanto en areas como publicidad, marketing, contabilidad, seguridad impulsando el ecoturismo y el desarrollo popular.</li>
                        </ul>
                    </div>
                </div>

                

    </main>
@endsection
