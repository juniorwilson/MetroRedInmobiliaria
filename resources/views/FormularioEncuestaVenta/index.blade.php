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
    <form action="/Formulario-Venta" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container border">
            <h1 class="text-center">ENCUESTA DE VENTA</h1>
            <div class="form-row">
                <div class="form-group col-md-6 shadow-none p-3 mb-5 bg-light rounded">
                    <label for="inputEmail4">Direccion del inmueble.</label>
                    <input type="text" name="DirrecionInmueble" class="form-control border-danger" id="inputEmail4"
                        placeholder="ingresa la direccion del inmueble" required>
                </div>
                <div class="form-group col-md-6 shadow-none p-3 mb-5 bg-light rounded">
                    <label for="inputEmail4">ID del inmueble.</label>
                    <input type="number" min="0" name="IDInmueble" class="form-control border-danger" id="inputEmail4" placeholder="ingresa id del inmueble"
                        required>
                </div>
                <h3 class="mb-3">OBJETIVO:verificar el grado de satisfaccion del cliente que solicite un inmueble para
                    la Venta
                    ofrecido por
                    METRO RED INMOBILIARIA.</h3>
                <div class="form-check col-md-6">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿Como le parecio el servicio prestado por el agente de METRO RED INMOBILIARIA?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="ServicioPrestado" value="EXCELENTE" required> EXCELENTE
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="ServicioPrestado" value="BUENO"> BUENO
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="ServicioPrestado" value="REGULAR"> REGULAR
                    </label>
                    </div>
                    
                </div>

                <div class="form-check col-md-6 text-center ">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿Como le parecio el estado general y aseo del inmueble?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="EstadoGeneral" value="EXCELENTE" required> EXCELENTE
                    </label> &nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="EstadoGeneral" value="BUENO"> BUENO
                    </label> &nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="EstadoGeneral" value="REGULAR"> REGULAR
                    </label>
                </div>
                    
                </div>
                <div class="form-check col-md-12 text-center">
                    <h5></h5>
                </div>
                <div class="form-check col-md-6 text-center">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿considera este inmueble como una opcion de compra?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="OpcionCompra" value="SI" required> SI
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="OpcionCompra" value="NO"> NO
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="OpcionCompra" value="TALVEZ"> TALVEZ
                    </label>
                </div>
                
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="inputEmail4">
                        <h5 class="mb-3">¿Esta usted de acuerdo con el valor de venta del inmueble?</h5>
                    </label>
                    <input type="text" name="AcuerdoValordeVenta" class="form-control border-danger" id="valor" placeholder="ingrese la opinion del valor"
                        required>
                </div>
                
            </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿como le parece la ubicacion del inmueble?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="UbicacionInmueble" value="EXCELENTE" required> EXCELENTE
                    </label >&nbsp;
                    <label  class="text-danger font-weight-bold">
                        <input type="radio" name="UbicacionInmueble" value="BUENO"> BUENO
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="UbicacionInmueble" value="REGULAR"> REGULAR
                    </label>
                </div>
                
            </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="inputEmail4">
                        <h5>¿Desea realizar alguna oferta sobre este inmueble?</h5>
                    </label>
                    <input type="text" name="OfertaInmueble" class="form-control  border-danger" id="oferta" placeholder="ingrese la opinion sobre la oferta"
                        required>
                </div>
                
            </div>
                <div class="form-check col-md-12 text-center mb-3">
                    <h5>¿Podria suministrar dos referidos? </h5>
                </div>
                <div class="form-check col-md-6 text-center shadow-none p-3 mb-5 bg-light rounded">
                    <label for="input4">
                        <h5>Referido 1</h5>
                    </label>
                    <input type="text" name="ReferidoNombre" class="form-control mb-3 border-danger" id="nombre1" placeholder="Nombre" required>
                    <input type="number" min="0" name="ReferidoTelefono" class="form-control mb-3 border-danger" id="telefono" placeholder="Telefono" required>
                </div>
                <div class="form-check col-md-6 text-center shadow-none p-3 mb-5 bg-light rounded">
                    <label for="input">
                        <h5>Referido 2</h5>
                    </label>
                    <input type="text" name="ReferidoNombre2" class="form-control mb-3 border-danger" id="nombre2" placeholder="Nombre" required>
                    <input type="number" min="0" name="ReferidoTelefono2" class="form-control mb-3 border-danger" id="telefono2" placeholder="Telefono" required>
                </div>
                <div class="form-check col-md-12 text-center">
                    <h5>DATOS DEL CLIENTE Y PROPIETARIO</h5>
                    
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="input">
                        <h5>CLIENTE:</h5>
                    </label>
                    <input type="text" name="NombreCliente" class="form-control mb-3 border-danger" id="clienten" placeholder="Nombre" required>
                    <div class="row">
                    <div class="col">
                        <input type="number" min="0" name="CedulaCliente" class="form-control mb-3 border-danger" id="clientec" placeholder="Cedula" required>
                    </div>
                    <div class="col">
                        <input type="number" min="0" name="TelefonoCliente" class="form-control mb-3 border-danger" id="clientet" placeholder="Telefono-Celular"
                        required>
                    </div>
                </div>

                    <input type="email" name="MailCliente" class="form-control mb-3 border-danger" id="clientee" placeholder="E-MAIL" required>
                    <div class="custom-file">
                        <input type="file" name="FirmaCliente" class="custom-file-input border-danger" id="clientef">
                        <label class="custom-file-label" for="customFile">SUBIR FIRMA</label>
                    </div>
                </div>    
            </div>

                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="input">
                        <h5>PROPIETARIO:</h5>
                    </label>
                    <input type="text" name="NombrePropietario" class="form-control mb-3 border-danger" id="propietarion" placeholder="Nombre" required>
                    <div class="row">
                        <div class="col">
                            <input type="number" min="0" name="CedulaPropietario" class="form-control mb-3 border-danger" id="propietarioc" placeholder="Cedula" required>
                        </div>
                        <div class="col">
                            <input type="number" min="0" name="TelefonoPropietario" class="form-control mb-3 border-danger" id="propietariot" placeholder="Telefono-Celular"
                            required>
                        </div>
                    <input type="email" name="MailPropietario" class="form-control mb-3 border-danger" id="propietarioe" placeholder="E-MAIL" required>
                    <div class="custom-file">
                        <input type="file" name="FirmaPropietario" class="custom-file-input" id="propietariof">
                        <label class="custom-file-label" for="customFile">SUBIR FIRMA</label>
                    </div>
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
