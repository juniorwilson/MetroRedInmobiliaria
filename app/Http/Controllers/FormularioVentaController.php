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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("FormularioEncuestaVenta.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
       $formulario = new FormularioVenta();
       $formulario->save();
       */
      return 1;
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
