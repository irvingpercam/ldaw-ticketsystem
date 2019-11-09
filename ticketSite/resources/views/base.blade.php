<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Tickets')</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="http://allfont.es/allfont.css?fonts=arial-black" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Start Nav -->
<div class="navbar-fixed"> 
    <nav>
        <div class="nav-wrapper deep-orange darken-2">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">
                <img class="dmh-logo" src="{{ asset('/img/ticket.png') }}" alt="Logo DMH" style="width:8vh;height:auto;">
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="white-text gen-font" href="/">Inicio</a></li>
                <li><a class="white-text gen-font" href="#">Cursos</a></li>
                <li><a class="white-text gen-font" href="#">Talleres</a></li>
                <li><a class="white-text gen-font" href="#">Conferencias</a></li>
                <li><a class="white-text gen-font" href="#">Contacto</a></li>
                <li><a class="waves-effect waves-light btn white deep-orange-text" href="/register"><i class="material-icons left deep-orange-text">account_circle</i>Iniciar Sesión</a></li>
            </ul>
            </div>
        </nav>
    </div>
        <ul class="sidenav deep-orange darken-2" id="mobile-demo">
            <li><a class="white-text gen-font" href="/"><i class="material-icons white-text">home</i>Inicio</a></li>
            <li><a class="white-text gen-font" href="#"><i class="material-icons white-text">people</i>Cursos</a></li>
            <li><a class="white-text gen-font" href="#"><i class="material-icons white-text">assignment</i>Talleres</a></li>
            <li><a class="white-text gen-font" href="#"><i class="material-icons white-text">group_work</i>Conferencias</a></li>
            <li><a class="white-text gen-font" href="#"><i class="material-icons white-text">mail</i>Contacto</a></li>
        </ul>
<!-- End Nav -->
    @yield('content')
<!-- Start Footer -->
    <footer class="page-footer deep-orange darken-2">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">TicketSite</h5>
            <p class="grey-text text-lighten-4">Compañia dedicada a la venta de boletos. Sitio en construcción.</p>
            </div>
            <div class="col l3 s12">
            <h5 class="white-text">Settings</h5>
            <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
            </div>
            <div class="col l3 s12">
            <h5 class="white-text">Connect</h5>
            <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
        </div>
    </footer>
<!-- End Footer -->
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>