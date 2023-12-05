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

Route::get('index/compañerosA2','CompañerosA2Controller@index')->name('compañerosA2');
Route::get('index/evidenciasa2A','EvidenciasA2AprendicesController@index')->name('evidencias.categoriaA2');
Route::get('index/crear2A','ResponderA2Controller@create')->name('responderA2.create');
Route::post('index/responder2A','ResponderA2Controller@store')->name('responderA2.store');
Route::get('index/calificacionesA2','CalificacionesA2Controller@index')->name('calificacionesA2');
Route::get('index/evidenciasaB1','EvidenciasB1AprendicesController@index')->name('evidencias.categoriaB1');
Route::get('index/crearB1','ResponderB1Controller@create')->name('responderB1.create');
Route::post('index/responderB1','ResponderB1Controller@store')->name('responderB1.store');
Route::get('index/calificacionesB1','CalificacionesB1Controller@index')->name('calificacionesB1');
Route::get('index/compañerosB1','CompañerosB1Controller@index')->name('compañerosB1');
Route::get('index/evidenciasaC1','EvidenciasC1AprendicesController@index')->name('evidencias.categoriaC1');
Route::get('index/crearC1','ResponderC1Controller@create')->name('responderC1.create');
Route::post('index/responderC1','ResponderC1Controller@store')->name('responderC1.store');
Route::get('index/calificacionesC1','CalificacionesC1Controller@index')->name('calificacionesC1');
Route::get('index/compañerosC1','CompañerosC1Controller@index')->name('compañerosC1');
Route::get('index/evidenciasaC2','EvidenciasC2AprendicesController@index')->name('evidencias.categoriaC2');
Route::get('index/calificacionesC2','CalificacionesC2Controller@index')->name('calificacionesC2');
Route::get('index/crearC2','ResponderC2Controller@create')->name('responderC2.create');
Route::post('index/responderC2','ResponderC2Controller@store')->name('responderC2.store');
Route::get('index/compañerosC2','CompañerosC2Controller@index')->name('compañerosC2');
Route::get('inicio','InicioController@index')->name('inicio.index');
Route::post('enviarcorreo', function() {
    Mail::to('edwardfabianpinzon@gmail.com')->send(new EnviarCorreo);
    Mail::to('juandavidpedrazavelandia64@gmail.com')->send(new EnviarCorreo);
    return "Correo enviado exitosamente";
})->name('enviar-correo');
Route::get('enviarcorreo','CorreoController@index')->name('enviar-correo');

//rutas rol instructor

Route::post('index/categoriaia2/agregar','CategoriaA2InstructoresController@store')->name('evidenciasA2.store');
Route::get('index/Evidenciasa2Edit/{id}','CategoriaA2InstructoresController@edit')->name('evidenciasA2.edit');
Route::get('evidenciasA2/update/{id}','CategoriaA2InstructoresController@update')->name('evidenciasA2.update');
Route::get('index/evidenciasa2','EvidenciasA2Controller@index')->name('evidenciasA2');
Route::get('index/evidenciasa2/agregar','CategoriaA2InstructoresController@create')->name('evidenciasA2.create');
Route::get('index/evidenciasAprenA2','EvidenciasAprendicesA2Controller@index')->name('evidenciasaprena2');
Route::get('index/calificarAprenA2/{id}','EvidenciasAprendicesA2Controller@edit')->name('calificaraprena2');
Route::get('index/guardarAprenA2/{id}','EvidenciasAprendicesA2Controller@update')->name('guardaraprena2');
Route::get('/descargar-adjuntoa2/{id}', 'EvidenciasAprendicesA2Controller@descargar')->name('descargarA2.adjunto');
Route::get('index/evidenciasb1','EvidenciasB1Controller@index')->name('evidenciasB1');
Route::get('index/evidenciasAprenB1','EvidenciasAprendicesB1Controller@index')->name('evidenciasaprenb1');
Route::get('index/evidenciasb1/agregar','CategoriaB1InstructoresController@create')->name('evidenciasB1.create');
Route::post('index/evidenciasb1/guardar','CategoriaB1InstructoresController@store')->name('evidenciasB1.store');
Route::get('index/Evidenciasb1Edit/{id}','CategoriaB1InstructoresController@edit')->name('evidenciasB1.edit');
Route::get('evidenciasb1/update/{id}','CategoriaB1InstructoresController@update')->name('evidenciasB1.update');
Route::get('index/calificarAprenb1/{id}','EvidenciasAprendicesB1Controller@edit')->name('calificaraprenb1');
Route::get('/descargar-adjuntob1/{id}', 'EvidenciasAprendicesB1Controller@descargar')->name('descargarB1.adjunto');
Route::get('index/guardarAprenB1/{id}','EvidenciasAprendicesB1Controller@update')->name('guardaraprenb1');
Route::get('index/evidenciasc1','EvidenciasC1Controller@index')->name('evidenciasC1');
Route::get('index/evidenciasc1/agregar','CategoriaC1InstructoresController@create')->name('evidenciasC1.create');
Route::get('index/Evidenciasc1Edit/{id}','CategoriaC1InstructoresController@edit')->name('evidenciasC1.edit');
Route::post('index/evidenciasc1/guardar','CategoriaC1InstructoresController@store')->name('evidenciasC1.store');
Route::get('evidenciasc1/update/{id}','CategoriaC1InstructoresController@update')->name('evidenciasC1.update');
Route::get('calificarC1/{id}','EvidenciasAprendicesC1Controller@edit')->name('calificaraprenc1');
Route::get('index/evidenciasAprenC1','EvidenciasAprendicesC1Controller@index')->name('evidenciasaprenc1');
Route::get('index/guardarAprenC1/{id}','EvidenciasAprendicesC1Controller@update')->name('guardaraprenc1');
Route::get('index/calificarAprenc1/{id}','EvidenciasAprendicesC1Controller@edit')->name('calificaraprenc1');
Route::get('/descargar-adjuntoc1/{id}', 'EvidenciasAprendicesC1Controller@descargar')->name('descargarC1.adjunto');
Route::get('index/evidenciasc2','EvidenciasC2Controller@index')->name('evidenciasC2');
Route::get('index/evidenciasc2/agregar','CategoriaC2InstructoresController@create')->name('evidenciasC2.create');
Route::post('index/evidenciasc2/guardar','CategoriaC2InstructoresController@store')->name('evidenciasC2.store');
Route::get('index/Evidenciasc2Edit/{id}','CategoriaC2InstructoresController@edit')->name('evidenciasC2.edit');
Route::get('evidenciasc2/update/{id}','CategoriaC2InstructoresController@update')->name('evidenciasC2.update');
Route::get('index/evidenciasAprenC2','EvidenciasAprendicesC2Controller@index')->name('evidenciasaprenc2');
Route::get('index/guardarAprenC2/{id}','EvidenciasAprendicesC2Controller@update')->name('guardaraprenc2');
Route::get('index/calificarAprenc2/{id}','EvidenciasAprendicesC2Controller@edit')->name('calificaraprenc2');
Route::get('/descargar-adjuntoc2/{id}', 'EvidenciasAprendicesC2Controller@descargar')->name('descargarC2.adjunto');