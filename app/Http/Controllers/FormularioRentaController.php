<?php

namespace App\Http\Controllers;

use App\FormularioRenta;
use Illuminate\Http\Request;

class FormularioRentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("FormularioEncuestaRenta.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $NuevoCliente = "EncuestaRenta/" . $FirmaClienteName;
        Move_uploaded_file($FirmaClienteTPMName, $NuevoCliente);

        
        $FirmaPropietarioTPMName = $_FILES['FirmaPropietario']['tmp_name'];
        $FirmaPropietarioName = $_FILES['FirmaPropietario']['name'];
        $NuevoPropietario = "EncuestaRenta/" . $FirmaPropietarioName;
        Move_uploaded_file($FirmaPropietarioTPMName, $NuevoPropietario);
        
       $formulario = new FormularioRenta();
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
       
    
      return redirect('inicio')->with('message', 'Gracias por llenar la encuesta de Renta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
