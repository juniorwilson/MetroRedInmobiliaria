<?php

namespace App\Http\Controllers;

use App\Exports\DatosExport;
use App\Exports\UsersExport2;
use App\FormularioRenta;
use App\FormularioVenta;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InicioController extends Controller
{
    public function index()
    {
        return view('inicio.index');
    }
    public function ViewPdfRenta()
    {
        $FormularioRenta = FormularioRenta::all();
        $pdf = PDF::loadView('PDF.FormularioRenta',compact('FormularioRenta'));
        return $pdf->stream();
    }
    public function DownloadPdfRenta()
    {
        $FormularioRenta = FormularioRenta::all();
        $pdf = PDF::loadView('PDF.FormularioRenta',compact('FormularioRenta'));
        return $pdf->download('Informe Encuesta Renta.pdf');
    }
    public function ExportExcelRenta()
    {
        return Excel::download(new DatosExport, 'Informe Encuesta Renta.xlsx');
    }

    public function ViewPdfVenta()
    {
        $FormularioRenta = FormularioVenta::all();
        $pdf = PDF::loadView('PDF.FormularioVenta',compact('FormularioRenta'));
        return $pdf->stream();
    }
    public function DownloadPdfVenta()
    {
        $FormularioRenta = FormularioVenta::all();
        $pdf = PDF::loadView('PDF.FormularioVenta',compact('FormularioRenta'));
        return $pdf->download('Informe Encuesta Venta.pdf');
    }
    public function ExportExcelVenta()
    {
        return Excel::download(new UsersExport2, 'Informe Encuesta Venta.xlsx');
    }
}
