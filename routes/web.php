<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('aprendices','App\Http\Controllers\AprendicesController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('participantes','AprendicesController@index')->name('aprendices.index');

Route::get('pago','PagoController@index')->name('pago.index');

Route::get('inscripcion','InscripcionController@index')->name('inscripcion.index');

Route::get('inicio','InicioController@index')->name('inicio.index');