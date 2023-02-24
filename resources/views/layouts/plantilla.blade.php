<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

    <title>Tambillo - @yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="form-validation.css" rel="stylesheet">

    <style>
        .back-negocio {
            background-image: url("../img/portadaTambillo.jpg");
        }
    </style>

</head>


<body>
    <!-- HEADER -->
    @yield('header')
    <!-- NAV -->

    @yield('content')
    {{-- @yield('productos') --}}
        

    <!-- FOOTER -->


    <!-- SCRIPT -->

</body>

</html>
