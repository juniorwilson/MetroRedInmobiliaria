<?php

namespace App\Http\Controllers;

use App\Exports\DatosExport;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('inicio.index');
    }
    asdasd
    public function ViewPdf()
    {
        $pdf = PDF::loadView('PDF.FormularioRenta');
        return $pdf->stream();
    }
    public function DownloadPdf()
    {
        $pdf = PDF::loadView('PDF.FormularioRenta');
        return $pdf->download('exportacion de datos.pdf');
    }
    public function ExportExcel()
    {
        return Excel::download(new DatosExport, 'users.xlsx');
    }
}
