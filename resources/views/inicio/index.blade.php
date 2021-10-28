<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Dashboard</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-center mb-5">
    <div class="container">
      <div class="col-4">
        <p class="navbar-brand">Nombre : {{ Auth::user()->name }}</p>
      </div>
      <div class="col-4">
        <p class="navbar-brand">Correo : {{ Auth::user()->email }}</p>
      </div>
      <div class="col-4">
        <a class="dropdown-item nav-link" href="{{ url('logout') }}">Cerrar Sesion</a>
      </div>
    </div>
  </nav>
  <div class="container text-center mb-5">
    <div class="row">
      <div class="col">
        <a href="{{ route('Formulario-Venta.index') }}" class="btn btn-primary" target="_blanck">Crear Encuesta
          Ventas</a>
      </div>
      <div class="col">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Opciones Encuesta Venta
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/Visualizar/generar/Venta/pdf" target="_blanck">Ver PDF</a>
            <a class="dropdown-item" href="/Descargar/generar/Venta/pdf">Descargar PDF</a>
            <a class="dropdown-item" href="/Generar/Venta/Excel">Generar Excel</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Opciones Encuesta Renta
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/Visualizar/generar/Renta/pdf" target="_blanck">Ver PDF</a>
            <a class="dropdown-item" href="/Descargar/generar/Renta/pdf">Descargar PDF</a>
            <a class="dropdown-item" href="/Generar/Renta/Excel">Generar Excel</a>
          </div>
        </div>
      </div>
      <div class="col">
        <a href="{{ route('Formulario-Renta.index') }}" class="btn btn-primary" target="_blanck">Crear Encuesta
          Renta</a>
      </div>
    </div>
  </div>
  @if (Session::has('message'))
  <?php if (Session::get('message') == 'Gracias por llenar la encuesta de Renta') {
    echo '<div class="container text-center">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="col-12">
            <span style="font-size: 9em; color: #52DE70;">
              <i class="fas fa-check-circle"></i>
            </span>
            <h2>
              <p>GRACIAS POR LLENAR LA ENCUESTA</p>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>';
  }
  ?>
  @endif
  @if (Session::has('message'))
  <?php if (Session::get('message') == 'Gracias por llenar la encuesta de Venta') {
    echo '<div class="container text-center">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="col-12">
            <span style="font-size: 9em; color: #52DE70;">
              <i class="fas fa-check-circle"></i>
            </span>
            <h2>
              <p>GRACIAS POR LLENAR LA ENCUESTA</p>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>';
  }
  ?>
  @endif
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script>
    $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
          });
  </script>
</body>

</html>