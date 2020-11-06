<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/bootstrap.min.jurnal.css">
    <style>
        .navbar{
            color: black;
        }
        .jumbotron{
            background-image: url("../imgs/fondo-plantilla.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            margin-bottom: 0;
        }
        .navbar{
            margin-top: 0;
        }
        .btn{
            margin: 5px;
        }
        .rounded{
            width: 50%;
        }
        .page-footer{
            padding: 15px;
            color: black;
        }
        .titulos-footer{
            color: black;
        }
        .cont-titulo{
            background-color: #dae0e5;
            border-radius: 5px;
        }
        .cont-slogan{
            background-color: #dae0e5;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @yield("navbar")
        <a class="navbar-brand" href="{{ url('/') }}">Miriam Mendoza</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/propiedades') }}">Todas las propiedades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>Teléfono: 1122-3344 / 22331199</li>
            </ul>
        </div>
    </nav>
</header>
<div class="jumbotron jumbotron-fluid">
    @yield("header")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cont-titulo">
                    <h1 class="text-center">Inmobiliaria Miriam Mendoza</h1>
                </div>
                <p>&nbsp;</p>
                <div class="cont-slogan"><strong>
                    <p class="text-center">Alcanzar tus sueños, puede lograrse.</p>
                    <p class="text-center">Llegar a esa propiedad en la cual siempre soñaste, puede ser posible con nosotros.</p></strong>
                </div>
                <p class="text-center"><a class="btn btn-primary btn-lg" href="{{ url('/propiedades') }}" role="button">Ver todas las propiedades</a> </p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-brand">Buscar propiedades:</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item busquedas-left">Por código:
                <form class="form-inline busquedas" method="post" action="{{ url('/propiedad-codigo') }}">
                    @csrf
                    <input name="codigo" class="form-control mr-sm-2" type="search" placeholder="Código de propiedad" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </li>
            <li class="nav-item busquedas-left">Por partido:
                <form class="form-inline busquedas" method="post" action="{{ url('/propiedades-partido') }}">
                    @csrf
                    <input name="partido" class="form-control mr-sm-2" type="search" placeholder="Partido" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </li>
            <li class="nav-item busquedas-left">Por localidad:
                <form class="form-inline busquedas" method="post" action="{{ url('/propiedades-localidad') }}">
                    @csrf
                    <input name="localidad" class="form-control mr-sm-2" type="search" placeholder="Localidad" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </li>
            <li class="nav-item busquedas-left">Por calle:
                <form class="form-inline busquedas" method="post" action="{{ url('/propiedades-calle') }}">
                    @csrf
                    <input name="calle" class="form-control mr-sm-2" type="search" placeholder="Localidad" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-outline-danger my-2 my-sm-0" href="{{ url('/alquileres') }}">Todos los Alquileres</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-danger my-2 my-sm-0" href="{{ url('/ventas') }}">Todas las Ventas</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield("contenido")


</div>

<br />
<br />
<br />
<br />


<!-- footer -->
<footer class="page-footer bg-light">
    @yield("footer")
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="titulos-footer">LOGO - Nombre</h2>
                <br />
                <!--div>
                    <strong>Suscribite a nuestro newsletter</strong><br /><br />
                    <form class="form-inline">
                        <input id="envioCorreo1" class="form-control" type="email" placeholder="Correo Electronico" name="correo" id="correo" required />
                        <button type="submit" id="envioCorreo" class="btn btn-light my-2 my-sm-0">Suscribite</button>
                    </form>
                    <br />
                </div-->
                <div id="redes" class="row">
                    <div class="col-2"><img class="rounded" src="../imgs/redes/facebook.png" alt="logo facebook"></div>
                    <div class="col-2"><img class="rounded" src="../imgs/redes/gmail.png" alt="logo gmail"></div>
                    <div class="col-2"><img class="rounded" src="../imgs/redes/twitter.png" alt="logo twitter"></div>
                    <div class="col-2"><img class="rounded" src="../imgs/redes/whatsapp.png" alt="logo whatsapp"></div>
                </div>
            </div>
            <div class="col-6">
                <h2 class="titulos-footer">Secciones</h2>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/propiedades') }}">Todas las propiedades</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
