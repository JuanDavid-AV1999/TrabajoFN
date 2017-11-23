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
});
Route::group(['namespace'=>'Frontend'],function (){
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



    //Mostrar el formulario de logeo
    Route::get('loguear','WebPageController@mostrarLoginForm')->name('loguear');
    //Validacion de usuaurio o admin
    Route::get('usuario','ValidatorFormController@usuario')->name('usuario');
    Route::get('admin','ValidatorFormController@admin')->name('admin');



});
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logaut','Auth\LoginController@logaut')->name('logaut');






