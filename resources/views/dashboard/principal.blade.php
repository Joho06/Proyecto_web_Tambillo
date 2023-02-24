<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <title> Tambillo </title>
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    </head>
    <body>
        <div class="header">
            <nav>
               
                <ul>
                   <!-- Aqui va los links a sus respectivas vistas -->
                    <li><a href="/principal">Inicio</a></li>
                    <li><a href="/nosotros">Sobre nosotros</a></li>
                    <li><a href="{{ route('negocios_productos.index')}}">Negocios</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/registro">Registrar</a></li>
                </ul>
                
            </nav>
           <div class="redes">
            <!-- En caso que tambillo tenga redes sociales irian a este apartado -->
            <a href="https://www.facebook.com/gadparroquialtambillo">Facebook</a>
            <a href="https://twitter.com/TambilloEcuador">Twitter</a>
            <a href="https://www.instagram.com/tambillo_ecuador/">Instagram</a>
           </div>
           <div class="linea"></div>
           <div class=" row " >
            <div>
                <div class="content" >
                    <!-- Textos quemados y descriptivos mas que nada, el br es nomas para que se vea saltado y mas ceentado se lo puede omitir-->
                    <h1>Comunidad<br>Tambillo</h1>
                    <p>La parroquia de Tambillo, cantón Mejía, cuenta con  24 barrios que muestran <br> su riqueza cultural y productiva.</p>
                    <p>Fue declarada parroquia el 23 de julio de 1883, luego de que el presidente de <br> la República, Luis Cordero, decretara la cantonización de Mejía.</p>
                    <p>Tambillo es una de las siete parroquias de este cantón. Está ubicada a 25 <br> kilómetros al sur de Quito.
                    </p>
                </div>
            </div>
            <div>
                <div class="info">
                    <!-- Igonos e informacion del lado derecho -->
                    <span class="active"><img src="{{ asset('img/sun.png')}}">Informacion</span>
                    <span><img src="{{ asset('img/location.png')}}">Direccion <br> Carlos Brito y 13 de Julio, Tambillo</span>
                    <span><img src="{{ asset('img/duration.png')}}">Fue declarada parroquia el 23 de julio de 1883.</span>
                </div>
            </div>
          
            </div>
           </div>
         
    </body>
</html>
