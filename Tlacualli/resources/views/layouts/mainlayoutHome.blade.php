<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >
</head>
<body>
    <header>
        <nav class="navHome">
            <img class="logo" src="{{ asset('img/Tlacualli.png') }}" alt="">
            <ul>
                <li>
                    <a href="{{ url('/') }}">Inicio</a>
                </li>
                <li>
                    <a href="#contacto">Contactanos</a>
                </li>
                <li>
                    <a href="#collab">Nuestros Colaboradores</a>
                </li>
                <li>
                    <a href="{{ url('/acercaNosotros') }}">Acerca de nosotros</a>
                </li>
                <li>
                    <a href="{{ url('/unete') }}">Unete</a>
                </li>
            </ul>
        </nav>
        <!--Termina el nav--> 
    </header>
    @yield('content')
    <footer>
        <center>
            <a id="socialNetHome" href="https://www.facebook.com/" target="blank">Facebook</a>
            <a id="socialNetHome" href="https://www.instagram.com/" target="blank">Instagram</a>
            <a id="socialNetHome" href="https://twitter.com/?lang=es" target="blank">Twitter</a>
            <br>
            <p id="socialNetHome">
                Todos los derechos resevados ®
            </p>
            <section id="contacto">
                <div>
                    <a id="socialNetHome" href="tel:4421352507" target="blank">Teléfono: 4421325207</a>
                    <a id="socialNetHome" href=mailto:121037815@upq.edu.mx target="blank">Correo: 121037815@upq.edu.mx</a>
                    <a id="socialNetHome" href="https://maps.app.goo.gl/VvmpG6XhcUXLYuEz7" target="blank">Nuestra Dirección</a>
                </div>
            </section>
        </center>
    </footer>
</body>
</html>