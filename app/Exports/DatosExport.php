<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
class DatosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Email',
        ];
    }
    public function collection()
    {
        $users = DB::table('formulario_encuesta_encuesta')->select('id','DirrecionInmueble', 'IDInmueble','ServicioPrestado','OpcionCompra','UbicacionInmueble','EstadoGeneral','AcuerdoValordeVenta','OfertaInmueble','ReferidoNombre','ReferidoTelefono','ReferidoNombre2','ReferidoTelefono2','NombreCliente','CedulaCliente','TelefonoCliente','MailCliente','NombrePropietario','CedulaPropietario','TelefonoPropietario','MailPropietario','created_at')->get();
        return $users;
    }
}
