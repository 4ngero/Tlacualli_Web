<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Unete</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav id="navbar">
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#contactUs">Contactanos</a>
            </li>
            <li>
                <a href="#collab">Colaboradores</a>
            </li>
            <li>
                <a href="#">Acerca de nosotros</a>
            </li>
            <li>
                <a href="join">Unete</a>
            </li>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <center>
            <p>
            Todos los derechos resevados ®
            </p>
            <br>
            <a href="">Facebook</a>
            <a href="">Instagram</a>
            <a href="">Twitter</a>
        </center>
    </footer>
</body>
</html>