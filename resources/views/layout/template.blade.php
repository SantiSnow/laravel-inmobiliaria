<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.jurnal.css">
    <style>
        .navbar{
            color: black;
        }
        .jumbotron{
            /*background-image: url("imgs/skyscraper-building.jpg");*/
            background-size: cover;
            background-repeat: no-repeat;
            margin-bottom: 0;
        }
        .navbar{
            margin-top: 0;
        }
        /*.busquedas{
            margin-left: 35px;
        }
        .alq{
            margin-left: 120px;
        }*/
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
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @yield("navbar")
        <a class="navbar-brand" href="#">Miriam Mendoza</a>
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
                <h1 class="text-center">Inmobiliaria Miriam Mendoza</h1>
                <p>&nbsp;</p>
                <p class="text-center">Alcanzar tus sueños, es posible.</p>
                <p class="text-center">Llegar a esa propiedad en la cual siempre soñaste, puede ser posible con nosotros.</p>
                <p>&nbsp;</p>
                <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Ver todas las propiedades</a> </p>
                <br />
                <br />
                <br />
                <br />
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
            <li class="nav-item">
                <form class="form-inline busquedas">
                    <input class="form-control mr-sm-2" type="search" placeholder="Código de propiedad" aria-label="Search">
                    <button class="btn btn-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </li>
            <li class="nav-item">
                <form class="form-inline busquedas">
                    <input class="form-control mr-sm-2" type="search" placeholder="Partido" aria-label="Search">
                    <button class="btn btn-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </li>
            <li class="nav-item">
                <form class="form-inline busquedas">
                    <input class="form-control mr-sm-2" type="search" placeholder="Localidad" aria-label="Search">
                    <button class="btn btn-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline alq busquedas">
                    <!-- input class="form-control mr-sm-2" type="search" placeholder="Localidad" aria-label="Search" -->
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Alquileres</button>
                </form>
            </li>
            <li class="nav-item">
                <form class="form-inline busquedas">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Ventas</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<br />
<br />
<div class="text-center">
    <h1>Propiedades</h1>
</div>
<br />
<br />
<div class="container">
    @yield("contenido")
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready-2.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready-2.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready-2.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready-2.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="imgs/dummy-ready-2.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">Propiedad</h5>
                    <p class="card-text">Descripción corta de la propiedad, precio, ambientes, detalles, ubicación.</p>
                    <a href="#" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br />
<br />
<br />
<br />
<br />
<br />
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
                <div>
                    <strong>Suscribite a nuestro newsletter</strong><br /><br />
                    <form class="form-inline">
                        <input id="envioCorreo1" class="form-control" type="email" placeholder="Correo Electronico" name="correo" id="correo" required />
                        <button type="submit" id="envioCorreo" class="btn btn-light my-2 my-sm-0">Suscribite</button>
                    </form>
                    <br />
                </div>
                <div id="redes" class="row">
                    <div class="col-2"><img class="rounded" src="imgs/redes/facebook.png" alt="logo facebook"></div>
                    <div class="col-2"><img class="rounded" src="imgs/redes/gmail.png" alt="logo gmail"></div>
                    <div class="col-2"><img class="rounded" src="imgs/redes/twitter.png" alt="logo twitter"></div>
                    <div class="col-2"><img class="rounded" src="imgs/redes/whatsapp.png" alt="logo whatsapp"></div>
                </div>
            </div>
            <div class="col-6">
                <h2 class="titulos-footer">Secciones</h2>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Todas las propiedades</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Sobre Nosotros</a>
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