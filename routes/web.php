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
    Route::get('Visualizar/generar/pdf', 'InicioController@ViewPdf')->middleware('auth');
    Route::get('Descargar/generar/pdf', 'InicioController@DownloadPdf')->middleware('auth');
    Route::get('Generar/Excel', 'InicioController@ExportExcel')->middleware('auth');
    Route::resource('Formulario-Venta', 'FormularioVentaController')->middleware('auth');
    Route::resource('Formulario-Renta', 'FormularioRentaController')->middleware('auth');
    
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


