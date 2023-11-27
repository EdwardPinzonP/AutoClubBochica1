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
Route::get('categoriaA2', 'CategoriaA2Controller@index')->name('categoriaA2');
Route::get('categoriaA2/eliminar/{id}', 'CategoriaA2Controller@destroy')->name('categoriaA2.destroy');
Route::get('categoriaA2/eliminar2/{id}', 'CategoriaA2Controller@destroyIns')->name('categoriaA2.destroyIns');
Route::get('categoriaB1','CategoriaB1Controller@index')->name('categoriaB1.index');
Route::get('aprendizb1/eliminar/{id}','CategoriaB1Controller@destroy')->name('categoriaB1.destroy');
Route::get('aprendizb1/eliminar2/{id}','CategoriaB1Controller@destroyIns')->name('categoriaB1.destroyIns');
Route::get('categoriaC1','CategoriaC1Controller@index')->name('categoriaC1.index');
Route::get('aprendizc1/eliminar/{id}','CategoriaC1Controller@destroy')->name('categoriaC1.destroy');
Route::get('aprendizc1/eliminar2/{id}','CategoriaC1Controller@destroyIns')->name('categoriaC1.destroyIns');
Route::get('categoriaC2','CategoriaC2Controller@index')->name('categoriaC2.index');
Route::get('aprendizc2/eliminar/{id}','CategoriaC2Controller@destroy')->name('categoriaC2.destroy');
Route::get('aprendizc2/eliminar2/{id}','CategoriaC2Controller@destroyIns')->name('categoriaC2.destroyIns');
Route::get('create/agregarusuario','CrearUsuariosController@create')->name('usuarios.create');
Route::post('agregar/usuarios','CrearUsuariosController@store')->name('usuarios.store');
Route::get('/buscar-aprendiz','AprendicesController@buscarAprendiz')->name('buscarAprendiz');
Route::get('/buscar-instructor','InstructoresController@buscarInstructor')->name('buscarInstructor');
Route::get('vincular-aprendices/index','VincularController@create')->name('vincular');
Route::post('vincular/aprendices','VincularController@store')->name('vincular.store');
Route::get('vincular-instructores/index','VincularInstructores@create')->name('vincularIns');
Route::post('vincular/Instructores','VincularInstructores@store')->name('vincularIns.store');
Route::get('vincular-administradores/index','VincularAdministradores@create')->name('vincularAdm');
Route::post('vincular/administradores','VincularAdministradores@store')->name('vincularAdm.store');


//rutas rol aprendiz

Route::get('index/categoriaa2','CategoriaA2AprendicesController@index')->name('aprendices.categoriaA2');
Route::get('index/categoriab1','CategoriaB1AprendicesController@index')->name('aprendices.categoriaB1');
Route::get('index/categoriac1','CategoriaC1AprendicesController@index')->name('aprendices.categoriaC1');
Route::get('index/categoriac2','CategoriaC2AprendicesController@index')->name('aprendices.categoriaC2');
Route::get('inicio','InicioController@index')->name('inicio.index');
Route::post('enviarcorreo', function() {
    Mail::to('edwardfabianpinzon@gmail.com')->send(new EnviarCorreo);
    Mail::to('juandavidpedrazavelandia64@gmail.com')->send(new EnviarCorreo);
    return "Correo enviado exitosamente";
})->name('enviar-correo');
Route::get('enviarcorreo','CorreoController@index')->name('enviar-correo');




