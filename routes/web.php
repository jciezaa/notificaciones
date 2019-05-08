<?php

Route::get('/', 'ConfigurationController@resumen');
Route::get('resumen', 'ConfigurationController@resumen');

//Para utilizarlo con etiquetas <a href="">
//Route::get('/notificacion','TeacherController@mail');

//Para utilizarlo con button
Route::get('notificar', 'ConfigurationController@indexNotificar');
Route::post('notificacion', 'TeacherController@mail');

Route::get('configuraciones', 'ConfigurationController@indexConfig');
Route::get('reporte', 'ConfigurationController@indexConfig');

//Ruta para importar CVS
Route::post('importarDatabase', 'TeacherController@importarDatabase');

Route::get('configuraciones/data', 'TeacherController@index');
Route::get('configuraciones/email', 'EmailController@confEmail');
Route::post('configuraciones/email', 'EmailController@updateEmail');
Route::get('configuraciones/copiaoculta', 'ConfigurationController@confBbc');
Route::post('configuraciones/copiaoculta', 'ConfigurationController@createBBC');
Route::get('configuraciones/copiaoculta/{id}/eliminar', 'ConfigurationController@deleteBBC');
