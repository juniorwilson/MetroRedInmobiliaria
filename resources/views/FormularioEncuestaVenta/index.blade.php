<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Venta</title>
</head>

<body>
    <form action="/formulario" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <h1 class="text-center">Encuesta de venta</h1>
            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputEmail4">Direccion del inmueble</label>
                    <input type="text" class="form-control " id="inputEmail4"
                        placeholder="ingresa la direccion del inmueble" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">ID del inmueble</label>
                    <input type="number" class="form-control" id="inputEmail4" placeholder="ingresa id del inmueble"
                        required>
                </div>
                <h3 class="mb-3">OBJETIVO:verificar el grado de satisfaccion del cliente que solicite un inmueble para
                    la Venta
                    ofrecido por
                    METRO RED INMOBILIARIA.</h3>
                <div class="form-check col-md-6 text-center">
                    <h5 class="mb-3">¿Como le parecio el servicio prestado por el agente de METRO RED INMOBILIARIA?</h5>
                    <label>
                        <input type="radio" name="servicio" value="EXCELENTE" required> EXCELENTE
                    </label>
                    <label>
                        <input type="radio" name="servicio" value="BUENO"> BUENO
                    </label>
                    <label>
                        <input type="radio" name="servicio" value="REGULAR"> REGULAR
                    </label>
                </div>
                <div class="form-check col-md-6 text-center ">
                    <h5 class="mb-3">¿Como le parecio el estado general y aseo del inmueble?</h5>
                    <label>
                        <input type="radio" name="estado" value="EXCELENTE" required> EXCELENTE
                    </label>
                    <label>
                        <input type="radio" name="estado" value="BUENO"> BUENO
                    </label>
                    <label>
                        <input type="radio" name="estado" value="REGULAR"> REGULAR
                    </label>
                </div>
                <div class="form-check col-md-12 text-center">
                    <h5></h5>
                </div>
                <div class="form-check col-md-6 text-center">
                    <h5 class="mb-3">¿considera este inmueble como una opcion de compra?</h5>
                    <label>
                        <input type="radio" name="compra" value="SI" required> SI
                    </label>
                    <label>
                        <input type="radio" name="compra" value="NO"> NO
                    </label>
                    <label>
                        <input type="radio" name="compra" value="TALVEZ"> TALVEZ
                    </label>
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <label for="inputEmail4">
                        <h5 class="mb-3">¿Esta usted de acuerdo con el valor de venta del inmueble?</h5>
                    </label>
                    <input type="text" class="form-control " id="valor" placeholder="ingrese la opinion del valor"
                        required>
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <h5 class="mb-3">¿como le parece la ubicacion del inmueble?</h5>
                    <label>
                        <input type="radio" name="ubicacion" value="EXCELENTE" required> EXCELENTE
                    </label>
                    <label>
                        <input type="radio" name="ubicacion" value="BUENO"> BUENO
                    </label>
                    <label>
                        <input type="radio" name="ubicacion" value="REGULAR"> REGULAR
                    </label>
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <label for="inputEmail4">
                        <h5>¿Desea realizar alguna oferta sobre este inmueble?</h5>
                    </label>
                    <input type="text" class="form-control" id="oferta" placeholder="ingrese la opinion sobre la oferta"
                        required>
                </div>
                <div class="form-check col-md-12 text-center mb-3">
                    <h5>¿Podria suministrar dos referidos?</h5>
                </div>
                <div class="form-check col-md-6 text-center">
                    <label for="input4">
                        <h5>Referido 1</h5>
                    </label>
                    <input type="text" class="form-control mb-3" id="nombre1" placeholder="Nombre" required>
                    <input type="number" class="form-control mb-3" id="telefono" placeholder="Telefono" required>
                </div>
                <div class="form-check col-md-6 text-center">
                    <label for="input">
                        <h5>Referido 2</h5>
                    </label>
                    <input type="text" class="form-control mb-3" id="nombre2" placeholder="Nombre" required>
                    <input type="number" class="form-control mb-3" id="telefono2" placeholder="Telefono" required>
                </div>
                <div class="form-check col-md-12 text-center">
                    <h5>DATOS DEL CLIENTE Y PROPIETARIO</h5>
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <label for="input">
                        <h5>CLIENTE:</h5>
                    </label>
                    <input type="text" class="form-control mb-3" id="clienten" placeholder="Nombre" required>
                    <input type="number" class="form-control mb-3" id="clientec" placeholder="Cedula" required>
                    <input type="number" class="form-control mb-3" id="clientet" placeholder="Telefono-Celular"
                        required>
                    <input type="email" class="form-control mb-3" id="clientee" placeholder="E-MAIL" required>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="clientef">
                        <label class="custom-file-label" for="customFile">SUBIR FIRMA</label>
                    </div>
                </div>

                <div class="form-check col-md-6 text-center mb-3">
                    <label for="input">
                        <h5>PROPIETARIO:</h5>
                    </label>
                    <input type="text" class="form-control mb-3" id="propietarion" placeholder="Nombre" required>
                    <input type="number" class="form-control mb-3" id="propietarioc" placeholder="Cedula" required>
                    <input type="number" class="form-control mb-3" id="propietariot" placeholder="Telefono-Celular"
                        required>
                    <input type="email" class="form-control mb-3" id="propietarioe" placeholder="E-MAIL" required>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="propietariof">
                        <label class="custom-file-label" for="customFile">SUBIR FIRMA</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" type="button" value="Enviar"
                style="border-radius: 8px; background-color: #cf1313;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;font-size: 20px;cursor: pointer;"></strong>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>