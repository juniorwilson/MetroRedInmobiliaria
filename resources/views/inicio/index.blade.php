<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Dashboard</title>
</head>

<body>
  <p>Nombre Usuario : {{ Auth::user()->name }}</p>
  <p>Correo Usuario : {{ Auth::user()->email }}</p>
  <a class="dropdown-item" href="{{ url('logout') }}">Cerrar Sesion</a>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <a href="{{ route('Formulario-Venta.index') }}" class="btn btn-primary" target="_blanck">Crear Encuesta
          Ventas</a>
      </div>
      <div class="col-sm">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Opciones
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/Visualizar/generar/pdf" target="_blanck">Ver PDF</a>
            <a class="dropdown-item" href="/Descargar/generar/pdf">Descargar PDF</a>
            <a class="dropdown-item" href="/Generar/Excel">Generar Excel</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <a href="{{ route('Formulario-Renta.index') }}" class="btn btn-primary" target="_blanck">Crear Encuesta
          Renta</a>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function () {
          $('.dropdown-toggle').dropdown();
        });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
</body>

</html>