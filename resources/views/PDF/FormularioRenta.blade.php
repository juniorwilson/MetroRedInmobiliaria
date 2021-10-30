<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
    $html = null;
    foreach ($FormularioRenta as $key => $info) {
    $html.='<h2 style="text-align: center">FORMATO PDF</h2>
    <h2 style="text-align: center">ENCUESTA DE RENTA</h2>
    
    <table style="width: 100%">
        <thead>
            <tr>
                <th>Direccion del inmueble.</th>
                <th>ID del inmueble.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$info->DirrecionInmueble.'</td>
                <td>'.$info->IDInmueble.'</td>
            </tr>
        </tbody>
    </table>
    <h3 style="text-align: center">OBJETIVO:verificar el grado de satisfaccion del cliente que solicite un inmueble para
        la Renta ofrecido por METRO RED INMOBILIARIA.</h3>
    
    <table style="width: 100%">
        <thead>
            <tr>
                <th>¿Como le parecio el servicio prestado por el agente de METRO RED INMOBILIARIA?</th>
                <th>¿Como le parecio el estado general y aseo del inmueble?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$info->ServicioPrestado.'</td>
                <td>'.$info->EstadoGeneral.'</td>
            </tr>
        </tbody>
    </table>
    
    <table style="width: 100%">
        <thead>
            <tr>
                <th>¿considera este inmueble como una opcion de compra?</th>
                <th>¿Esta usted de acuerdo con el valor de venta del inmueble?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$info->OpcionCompra.'</td>
                <td>'.$info->AcuerdoValordeVenta.'</td>
            </tr>
        </tbody>
    </table>
    
    <table style="width: 100%">
        <thead>
            <tr>
                <th>¿como le parece la ubicacion del inmueble</th>
                <th>¿Desea realizar alguna oferta sobre este inmueble?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$info->UbicacionInmueble.'</td>
                <td>'.$info->OfertaInmueble.'</td>
            </tr>
        </tbody>
    </table>
    <h3 style="text-align: center">¿Podria suministrar dos referidos?</h3>
    
    <table style="width: 100%">
        <thead>
            <tr>
                <th>Nombre Referido #1</th>
                <th>Telefono Referido #1</th>
                <th>Nombre Referido #2</th>
                <th>Telefono Referido #2</th>
            </tr>
        </thead>
        <tbody>';
            $html.= '<tr>' ;
                $html.= "<td class='td' style='text-align: center;'>" . $info->ReferidoNombre . '</td>' ;
                $html.= "<td class='td' style='text-align: center;'>" . $info->ReferidoTelefono . '</td>' ;
                $html.= "<td class='td' style='text-align: center;'>" . $info->ReferidoNombre2 . '</td>' ;
                $html.= "<td class='td' style='text-align: center;'>" . $info->ReferidoTelefono2 . '</td>' ;
                $html.= '</tr>' ;
            $html.= '</tbody>
    </table>';
    $html.= '
    <h3 style="text-align: center">DATOS DEL CLIENTE Y PROPIETARIO</h3>
    <h3 style="text-align: center">CLIENTE</h3>
    <table style="width: 100%">
        <thead>
            <tr>
                <th>Nombre CLIENTE</th>
                <th>Cedula CLIENTE</th>
                <th>Telefono CLIENTE</th>
                <th>Email CLIENTE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$info->NombreCliente.'</td>
                <td>'.$info->CedulaCliente.'</td>
                <td>'.$info->MailCliente.'</td>
                <td>'.$info->MailCliente.'</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%">
    <thead>
<tr>
    <th>Firma Cliente</th>
    <th>Firma Propietario</th>
</tr>
    </thead>
    <tbody>
        <tr>
            <td><a href='.$info->FirmaCliente.' target="_blanck">Firma CLiente</a></td>
            <td><a href='.$info->FirmaPropietario.' target="_blanck">Firma Propietario</a></td>
        </tr>
    </tbody>
</table>
    <h3 style="text-align: center">PROPIETARIO</h3>
    <table style="width: 100%">
        <thead>
            <tr>
                <th>Nombre PROPIETARIO</th>
                <th>Cedula PROPIETARIO</th>
                <th>Telefono PROPIETARIO</th>
                <th>Email PROPIETARIO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$info->CedulaPropietario.'</td>
                <td>'.$info->CedulaPropietario.'</td>
                <td>'.$info->TelefonoPropietario.'</td>
                <td>'.$info->MailPropietario.'</td>
            </tr>
        </tbody>
    </table>
    ';
    }
    echo $html;
    @endphp
</body>

</html>