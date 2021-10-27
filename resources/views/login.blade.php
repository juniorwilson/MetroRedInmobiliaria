<!DOCTYPE html>
<html lang="en">

<head>
    <title>Metro Red Inmobiliaria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ URL::asset('img/icono.ico') }}" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card mb-5">
            <div class="card-body">
                <form action="validar" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-md-4 mb-1 mb-md-0 text-center">
                        <p class="h3">INICIAR SECCION</p>
                        <i class="fas fa-user-circle" style="font-size: 10rem"></i>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6 col-md-4 mb-1 mb-md-0 text-center">
                            <label class="form-label">Correo electrónico</label>
                            <input class="form-control" type="text" name="email" placeholder="Correo electrónico">
                        </div>
                        <div class="col-lg-6 col-md-4 mb-1 mb-md-0 text-center">
                            <label class="form-label">Contraseña</label>
                            <input class="form-control" type="password" name="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <button class="btn btn-primary btn-lg">
                            Ingresar
                        </button>
                    </div>
                    <div class="text-center">
                        <strong>
                            @if (Session::has('message'))
                            <?php if (Session::get('message') == 'Error en los datos de acceso') {echo 'ERROR EN LOS DATOS DE ACCESO !!';}?>
                            @endif
                            @if (Session::has('message'))
                            <?php if (Session::get('message') == 'Usted se ha Registrado Correctamente !!') {echo 'GRACIAS POR REGISTRARSE EN EL SISTEMA';}?>
                            @endif
                        </strong>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>