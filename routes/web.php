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
})->name('welcome');
//Disografia
Route::get('discografia', function () {
    return view('usuarios.discografia');
})->name('usuarios.discografia');
//videos
Route::get('videos', function () {
    return view('usuarios.videos');
})->name('usuarios.videos');
//galeria
Route::get('galeria', function () {
    return view('usuarios.galeria');
})->name('usuarios.galeria');
//noticias
Route::get('noticias', function () {
    return view('usuarios.noticias');
})->name('usuarios.noticias');
//foro
Route::get('foro', function () {
    return view('usuarios.foro');
})->name('usuarios.foro');
//informacion
Route::get('informacion', function () {
    return view('usuarios.informacion');
})->name('usuarios.informacion');
//---------------------------------

//--------- ------------------------
//BASE DE DATOS INTERACION
 //guardar proveddores a la base
 Route::post('panelcontrol', function (Request $request) { 
    //return $request->all();
  $newvideo = new videos;
  $urlyoutube=$_POST["txtvidyoutube"];
  $caracteresurlyouyube=substr($urlyoutube,32,43);

  $newvideo->nombre = $request->input($urlyoutube);
  $newvideo->seccion = $request->input('VideosLista');
  $newvideo->URL_Video = $request->input($urlyoutube);
  $newvideo->StatusVideos = $request->input('1');
  $newvideo->save();
  return redirect()->route('{{route("admin.panelcontrol")}}')->with('info','Video Agregado exitosamente');
 })->name('admin.panelcontrolv');

 Route::get('panelcontrol', function () {
    return view('admin.panelcontrol');
})->name('admin.panelcontrol');
//_____________________-----------------------------------------
Route::middleware('auth')->group(function(){
//Panel de control
Route::get('panelcontrol', function () {
    return view('admin.panelcontrol');
})->name('admin.panelcontrol');

});
Auth::routes();
/* 
Route::get('/home', 'HomeController@index')->name('home');
 */