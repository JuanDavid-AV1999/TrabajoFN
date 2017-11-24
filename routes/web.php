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
Route::group(['namespace'=>'Backend'],function (){
    Route::post('registrar','RegistroController@store')->name('registrar');
    Route::get('registro','RegistroController@create')->name('registro');
    Route::get('afiliadosaccion','GeneroController@index')->name('afiliadosaccion');
});
Route::group(['namespace'=>'Frontend'],function (){
    //vista Normal
    Route::get('/','WebPageController@index')->name('/');
    Route::get('eventos','WebPageController@eventos')->name('eventos');
    Route::get('cursos','WebPageController@cursos')->name('cursos');
    Route::get('programas','WebPageController@programas')->name('programas');
    //Vista de usuario
    Route::get('index2','WebPageController@index2')->name('index2');
    Route::get('programas2','WebPageController@programas2')->name('programas2');
    Route::get('eventos2','WebPageController@eventos2')->name('eventos2');
    Route::get('cursos2','WebPageController@cursos2')->name('cursos2');
    Route::get('elementoseventos','WebPageController@elementoseventos')->name('elementoseventos');
    //vistas adim
    Route::get('index3','WebPageController@index3')->name('index3');
    Route::get('publicaciones','WebPageController@publicaciones')->name('publicaciones');
    Route::get('elementoseventos2','WebPageController@elementoseventos2')->name('elementoseventos2');
    Route::get('implementosdeportivos','WebPageController@implementosdeportivos')->name('implementosdeportivos');
    Route::get('registroelementoseventos','WebPageController@registroelementoseventos')->name('registroelementoseventos');
    Route::get('reservaelementoseventos','WebPageController@reservaelementoseventos')->name('reservaelementoseventos');
    Route::get('alquilerelementos','WebPageController@alquilerelementos')->name('alquilerelementos');
    Route::get('implementos','WebPageController@implementos')->name('implementos');
    Route::get('reservaimplementosdeportivos','WebPageController@reservaimplementosdeportivos')->name('reservaimplementosdeportivos');
    Route::get('prestamoimplementosdeportivos','WebPageController@prestamoimplementosdeportivos')->name('prestamoimplementosdeportivos');
    Route::get('registroeventos','WebPageController@registroeventos')->name('registroeventos');
    Route::get('eventos3','WebPageController@eventos3')->name('eventos3');
    Route::get('cursos3','WebPageController@cursos3')->name('cursos3');
    Route::get('programas3','WebPageController@programas3')->name('programas3');
    Route::get('registrocursos','WebPageController@registrocursos')->name('registrocursos');
    Route::get('controlinscripcioncurso','WebPageController@controlinscripcioncurso')->name('controlinscripcioncurso');
    Route::get('asistenciacursos','WebPageController@asistenciacursos')->name('asistenciacursos');
    Route::get('registroprogramas','WebPageController@registroprogramas')->name('registroprogramas');
    Route::get('inscripcionesprogramas','WebPageController@inscripcionesprogramas')->name('inscripcionesprogramas');




    //Mostrar el formulario de logeo
    Route::get('loguear','WebPageController@mostrarLoginForm')->name('loguear');
    //Validacion de usuaurio o admin
    Route::get('usuario','ValidatorFormController@usuario')->name('usuario');
    Route::get('admin','ValidatorFormController@admin')->name('admin');



});
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logaut','Auth\LoginController@logaut')->name('logaut');






