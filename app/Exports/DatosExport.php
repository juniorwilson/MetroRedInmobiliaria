<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DatosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'id',
            'Dirrecion Inmueble',
            'ID Inmueble',
            'Servicio Prestado',
            'Opcion Compra',
            'Ubicacion Inmueble',
            'Estado General',
            'Acuerdo Valor de Venta',
            'Oferta Inmueble',
            'Referido Nombre',
            'Referido Telefono',
            'Referido Nombre2',
            'Referido Telefono2',
            'Nombre Cliente',
            'Cedula Cliente',
            'Telefono Cliente',
            'Mail Cliente',
            'Nombre Propietario',
            'Cedula Propietario',
            'Telefono Propietario',
            'Mail Propietario',
            'fecha'
        ];
    }
    public function collection()
    {
        $users = DB::table('formulario_encuesta_encuesta')->select('id','DirrecionInmueble', 'IDInmueble','ServicioPrestado','OpcionCompra','UbicacionInmueble','EstadoGeneral','AcuerdoValordeVenta','OfertaInmueble','ReferidoNombre','ReferidoTelefono','ReferidoNombre2','ReferidoTelefono2','NombreCliente','CedulaCliente','TelefonoCliente','MailCliente','NombrePropietario','CedulaPropietario','TelefonoPropietario','MailPropietario','created_at')->get();
        return $users;
    }
}
