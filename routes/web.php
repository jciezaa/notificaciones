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
    return view('emails.welcome');
});





//Para utilizarlo con etiquetas <a href="">
//Route::get('/notificacion','TeacherController@mail');

//Para utilizarlo con button


Route::get('/welcome', function(){
	return view('emails.welcome');
});

Route::post('notificacion','TeacherController@mail');


Route::get('configuraciones','ConfigurationController@indexConfig');
Route::get('reporte','ConfigurationController@indexConfig');


Route::get('configuraciones/remitente','ConfigurationController@confSender');
Route::post('configuraciones/remitente','ConfigurationController@updateSender');


Route::get('configuraciones/email','EmailController@confEmail');
Route::post('configuraciones/email','EmailController@updateEmail');

Route::get('configuraciones/copiaoculta','ConfigurationController@confBbc');
Route::post('configuraciones/copiaoculta','ConfigurationController@createBBC');

Route::get('configuraciones/copiaoculta/{id}/eliminar','ConfigurationController@deleteBBC');



