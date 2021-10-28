<?php

namespace App\Http\Controllers;

use App\FormularioVenta;
use Illuminate\Http\Request;

class FormularioVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("FormularioEncuestaVenta.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        extract($_POST);

        $FirmaClienteTPMName = $_FILES['FirmaCliente']['tmp_name'];
        $FirmaClienteName = $_FILES['FirmaCliente']['name'];
        $NuevoCliente = "EncuestaVenta/" . $FirmaClienteName;
        Move_uploaded_file($FirmaClienteTPMName, $NuevoCliente);

        
        $FirmaPropietarioTPMName = $_FILES['FirmaPropietario']['tmp_name'];
        $FirmaPropietarioName = $_FILES['FirmaPropietario']['name'];
        $NuevoPropietario = "EncuestaVenta/" . $FirmaPropietarioName;
        Move_uploaded_file($FirmaPropietarioTPMName, $NuevoPropietario);
        
       $formulario = new FormularioVenta();
       $formulario->IDInmueble = $IDInmueble;
       $formulario->DirrecionInmueble = $DirrecionInmueble;
       $formulario->ServicioPrestado = $ServicioPrestado;
       $formulario->EstadoGeneral = $EstadoGeneral;
       $formulario->OpcionCompra = $OpcionCompra;
       $formulario->AcuerdoValordeVenta = $AcuerdoValordeVenta;
       $formulario->UbicacionInmueble = $UbicacionInmueble;
       $formulario->OfertaInmueble = $OfertaInmueble;
       $formulario->NombreCliente = $NombreCliente;
       $formulario->CedulaCliente = $CedulaCliente;
       $formulario->TelefonoCliente = $TelefonoCliente;
       $formulario->MailCliente = $MailCliente;
       $formulario->FirmaCliente = $NuevoCliente;
       $formulario->ReferidoNombre = $ReferidoNombre;
       $formulario->ReferidoTelefono = $ReferidoTelefono;
       $formulario->ReferidoNombre2 = $ReferidoNombre2;
       $formulario->ReferidoTelefono2 = $ReferidoTelefono2;
       $formulario->NombrePropietario = $NombrePropietario;
       $formulario->CedulaPropietario = $CedulaPropietario;
       $formulario->TelefonoPropietario = $TelefonoPropietario;
       $formulario->MailPropietario = $MailPropietario;
       $formulario->FirmaPropietario = $NuevoPropietario;
       $formulario->save();
       
      return redirect('inicio')->with('message', 'Gracias por llenar la encuesta de Venta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormularioVenta  $formularioVenta
     * @return \Illuminate\Http\Response
     */
    public function show(FormularioVenta $formularioVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormularioVenta  $formularioVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(FormularioVenta $formularioVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormularioVenta  $formularioVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormularioVenta $formularioVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormularioVenta  $formularioVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormularioVenta $formularioVenta)
    {
        //
    }
}
