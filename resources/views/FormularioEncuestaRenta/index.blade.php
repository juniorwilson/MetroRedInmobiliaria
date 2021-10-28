<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Renta</title>
</head>

<body>
    <form action="/formulario" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <p>formulario 1 </p>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre y apellido</label>
                <input type="text" class="form-control  border-danger" id="nombre" placeholder="Escribe tu nombre"
                    required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Telefono</label>
                <input type="number" class="form-control  border-danger" id="tel"
                    placeholder="Danos un numero telefonico para contactarte" required>
            </div>
            <div class="form-group ">
                <label for="exampleFormControlInput1">Correo electronico</label>
                <input type="email" class="form-control  border-danger" id="email"
                    placeholder="Escribe tu correo electronico" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensaje</label>
                <textarea class="form-control  border-danger" id="Mensaje" rows="3"></textarea>
            </div>

            <div class="text-center">
                <input type="submit" type="button" value="Enviar" style="border-radius: 8px; background-color: #cf1313;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
font-size: 20px;
cursor: pointer;"></strong>
            </div>

    </form>


    <hr style="color: red">

    <form action="/formulario" method="POST">
        {{ csrf_field() }}
        <div class="container border">
            <h1 class="text-center">ENCUESTA DE RENTA</h1><br><br>
            <div class="form-row">
                <div class="form-group col-md-6 shadow-none p-3 mb-5 bg-light rounded">
                    <label for="inputEmail4">Direccion del inmueble.</label>
                    <input type="text" class="form-control border-danger" id="inputEmail4"
                        placeholder="ingresa la direccion del inmueble" required><br><br>
                </div>
                <div class="form-group col-md-6 shadow-none p-3 mb-5 bg-light rounded">
                    <label for="inputEmail4">ID del inmueble.</label>
                    <input type="number" class="form-control border-danger" id="inputEmail4" placeholder="ingresa id del inmueble"
                        required><br><br>
                </div>
                <h3 class="mb-3">OBJETIVO:verificar el grado de satisfaccion del cliente que solicite un inmueble para
                    la Renta
                    ofrecido por
                    METRO RED INMOBILIARIA.<br><br></h3>
                <div class="form-check col-md-6">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿Como le parecio el servicio prestado por el agente de METRO RED INMOBILIARIA?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="servicio" value="EXCELENTE" required> EXCELENTE
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="servicio" value="BUENO"> BUENO
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="servicio" value="REGULAR"> REGULAR
                    </label>
                    </div>
                    <br><br>
                </div>

                <div class="form-check col-md-6 text-center ">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿Como le parecio el estado general y aseo del inmueble?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="estado" value="EXCELENTE" required> EXCELENTE
                    </label> &nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="estado" value="BUENO"> BUENO
                    </label> &nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="estado" value="REGULAR"> REGULAR
                    </label>
                </div>
                    <br><br>
                </div>
                <div class="form-check col-md-12 text-center">
                    <h5></h5>
                </div>
                <div class="form-check col-md-6 text-center">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿considera este inmueble como una opcion de compra?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="compra" value="SI" required> SI
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="compra" value="NO"> NO
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="compra" value="TALVEZ"> TALVEZ
                    </label>
                </div>
                <br><br>
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="inputEmail4">
                        <h5 class="mb-3">¿Esta usted de acuerdo con el valor de venta del inmueble?</h5>
                    </label>
                    <input type="text" class="form-control border-danger" id="valor" placeholder="ingrese la opinion del valor"
                        required>
                </div>
                <br><br>
            </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <h5 class="mb-3">¿como le parece la ubicacion del inmueble?</h5>
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="ubicacion" value="EXCELENTE" required> EXCELENTE
                    </label >&nbsp;
                    <label  class="text-danger font-weight-bold">
                        <input type="radio" name="ubicacion" value="BUENO"> BUENO
                    </label>&nbsp;
                    <label class="text-danger font-weight-bold">
                        <input type="radio" name="ubicacion" value="REGULAR"> REGULAR
                    </label>
                </div>
                <br><br>
            </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="inputEmail4">
                        <h5>¿Desea realizar alguna oferta sobre este inmueble?</h5>
                    </label>
                    <input type="text" class="form-control  border-danger" id="oferta" placeholder="ingrese la opinion sobre la oferta"
                        required>
                </div>
                <br><br>
            </div>
                <div class="form-check col-md-12 text-center mb-3">
                    <h5>¿Podria suministrar dos referidos? <br></h5>
                </div>
                <div class="form-check col-md-6 text-center shadow-none p-3 mb-5 bg-light rounded">
                    <label for="input4">
                        <h5>Referido 1</h5>
                    </label>
                    <input type="text" class="form-control mb-3 border-danger" id="nombre1" placeholder="Nombre" required>
                    <input type="number" class="form-control mb-3 border-danger" id="telefono" placeholder="Telefono" required>
                </div>
                <div class="form-check col-md-6 text-center shadow-none p-3 mb-5 bg-light rounded">
                    <label for="input">
                        <h5>Referido 2</h5>
                    </label>
                    <input type="text" class="form-control mb-3 border-danger" id="nombre2" placeholder="Nombre" required>
                    <input type="number" class="form-control mb-3 border-danger" id="telefono2" placeholder="Telefono" required>
                </div>
                <div class="form-check col-md-12 text-center">
                    <h5>DATOS DEL CLIENTE Y PROPIETARIO</h5>
                    <br>
                </div>
                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="input">
                        <h5>CLIENTE:</h5>
                    </label>
                    <input type="text" class="form-control mb-3 border-danger" id="clienten" placeholder="Nombre" required>
                    <div class="row">
                    <div class="col">
                        <input type="number" class="form-control mb-3 border-danger" id="clientec" placeholder="Cedula" required>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control mb-3 border-danger" id="clientet" placeholder="Telefono-Celular"
                        required>
                    </div>
                </div>

                    <input type="email" class="form-control mb-3 border-danger" id="clientee" placeholder="E-MAIL" required>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input border-danger" id="clientef">
                        <label class="custom-file-label" for="customFile">SUBIR FIRMA</label>
                    </div>
                </div>    <br><br>
            </div>

                <div class="form-check col-md-6 text-center mb-3">
                    <div class="text-center shadow p-3 mb-5 bg-white rounded">
                    <label for="input">
                        <h5>PROPIETARIO:</h5>
                    </label>
                    <input type="text" class="form-control mb-3 border-danger" id="propietarion" placeholder="Nombre" required>


                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control mb-3 border-danger" id="propietarioc" placeholder="Cedula" required>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control mb-3 border-danger" id="propietariot" placeholder="Telefono-Celular"
                            required>
                        </div>
                    <input type="email" class="form-control mb-3 border-danger" id="propietarioe" placeholder="E-MAIL" required>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="propietariof">
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
