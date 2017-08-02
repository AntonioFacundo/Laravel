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
    return view('welcome');
});

Route::resource('nutrir/pacientes', 'PacienteController');

Route::get('pdf', function(){
	$pdf = PDF::loadView('imp');
	return $pdf->download('archivo.pdf');
});

