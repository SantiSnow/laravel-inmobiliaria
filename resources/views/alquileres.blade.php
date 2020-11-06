<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Todas las propiedades - Inmobiliaria</title>
</head>
<body>

@extends("layout.template")
@section("navbar")

@endsection
@section("header")
@endsection
@section("contenido")

    <br />
    <br />
    <div class="text-center">
        <h1>Propiedades en alquiler:</h1>
    </div>
    <br />
    <br />
    <div class="row">
        @foreach($alquileres as $i)
            <div class="col-md-4">
                <div class="card">
                    <img src="imgs/{{ $i->Foto }}" class="card-img-top" alt="Foto principal de la propiedad">
                    <div class="card-body">
                        <h5 class="card-title">{{ $i->Direccion }}</h5>
                        <p class="card-text">{{ $i->Descripcion }}</p>
                        <a href="propiedad/{{ $i->id }}" class="btn btn-light">Conocer más...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section("footer")

@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
