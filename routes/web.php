<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;


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

//rutas rol Administrador

Route::get('index/listadoIns','InstructoresController@index')->name('instructores.index');
Route::get('index/listadoApren','AprendicesController@index')->name('aprendices.index');
Route::get('aprendiz/actualizar/{id}','AprendicesController@edit')->name('aprendices.edit');
Route::get('aprendiz/update/{id}','AprendicesController@update')->name('aprendices.update');
Route::get('instructor/editar/{id}','InstructoresController@edit')->name('instructores.edit');
Route::get('instructor/update/{id}','InstructoresController@update')->name('instructores.update');
Route::get('index/categoriaa2','CategoriaA2Controller@index')->name('categoriaA2.index');
Route::get('index/categoriab1','CategoriaB1Controller@index')->name('categoriaB1.index');
Route::get('index/categoriac1','CategoriaC1Controller@index')->name('categoriaC1.index');
Route::get('index/categoriac2','CategoriaC2Controller@index')->name('categoriaC2.index');





Route::get('pago','PagoController@index')->name('pago.index');

Route::get('inscripcion','InscripcionController@index')->name('inscripcion.index');

Route::get('inicio','InicioController@index')->name('inicio.index');

Route::post('enviarcorreo', function() {
    Mail::to('edwardfabianpinzon@gmail.com')->send(new EnviarCorreo);
    return "Correo enviado exitosamente";
})->name('enviar-correo');

Route::get('enviarcorreo','CorreoController@index')->name('enviar-correo');




