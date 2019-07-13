<?php

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
    return view('layouts.home');
});
Route::get('/mision', function () {
    return view('layouts.mision');
});

Route::get('acerca', function () {
    return view('layouts.acerca');
});

Route::get('pdf.hoy','reporteController@pdfhoy')->name('pdfhoy.pdfhoy');
Route::get('pdf.porfecha','reporteController@pdfporfecha')->name('pdfporfecha.pdfporfecha');
	




Route::resource('/usuarios','UsuarioController');
Route::resource('/paciente','PacienteController');
Route::resource('/consulta','ConsultaController');
Route::resource('reporte','ReporteController');
Route::resource('consultaApp','ConsultaControllerIonic');


Route::get('gestion','PacienteController@gestion')->name('paciente.gestion');

Route::get('reporte.semana','REporteController@semana')->name('reporte.semana');



Route::get('usuarios.login', 'UsuarioController@login')->name('usuarios.login');
Route::post('logear', 'UsuarioController@logear')->name('usuarios.logear');
Route::get('logout', 'UsuarioController@logout')->name('usuarios.logout');



