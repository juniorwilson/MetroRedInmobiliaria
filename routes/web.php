<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view("login");
});

Route::post('validar', 'LoginController@validar');

Route::group(['middleware' => 'auth'], function () {
    route::resource('inicio','InicioController');
    Route::get('Visualizar/generar/Venta/pdf', 'InicioController@ViewPdfVenta')->middleware('auth');
    Route::get('Descargar/generar/Venta/pdf', 'InicioController@DownloadPdfVenta')->middleware('auth');
    Route::get('Generar/Venta/Excel', 'InicioController@ExportExcelVenta')->middleware('auth');

    Route::get('Visualizar/generar/Renta/pdf', 'InicioController@ViewPdfRenta')->middleware('auth');
    Route::get('Descargar/generar/Renta/pdf', 'InicioController@DownloadPdfRenta')->middleware('auth');
    Route::get('Generar/Renta/Excel', 'InicioController@ExportExcelRenta')->middleware('auth');

    Route::resource('Formulario-Venta', 'FormularioVentaController')->middleware('auth');
    Route::resource('Formulario-Renta', 'FormularioRentaController')->middleware('auth');
    
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


