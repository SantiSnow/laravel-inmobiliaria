<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inmobiliaria - Miriam Mendoza</title>
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
        <h1>Propiedades encontradas:</h1>
    </div>
    <br />
    <br />
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="imgs/{{ $inmueble->Foto }}" class="card-img-top" alt="Foto principal de la propiedad">
                <div class="card-body">
                    <h5 class="card-title">{{ $inmueble->Direccion }}</h5>
                    <p class="card-text">{{ $inmueble->Descripcion }}</p>
                    <a href="propiedad/{{ $inmueble->id }}" class="btn btn-light">Conocer más...</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer")

@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
