<?php

Route::get('/', 'ConfigurationController@resumen');
Route::get('notificaciones/resumen', 'ConfigurationController@resumen');
Route::get('planificacion', 'ConfigurationController@planificacion');

//Para utilizarlo con etiquetas <a href="">
//Route::get('/notificacion','TeacherController@mail');

//Para utilizarlo con button
Route::get('notificaciones/notificar', 'ConfigurationController@indexNotificar');
Route::post('notificaciones/notificacion', 'TeacherController@mail');

Route::get('notificaciones/reporte', 'ConfigurationController@indexConfig');

//Ruta para importar CVS
Route::post('notificaciones/importarDatabase', 'TeacherController@importarDatabase');

Route::get('configuraciones/notificaciones/data', 'TeacherController@index');
Route::get('configuraciones/notificaciones/email', 'EmailController@confEmail');
Route::post('configuraciones/notificaciones/email', 'EmailController@updateEmail');
Route::get('configuraciones/notificaciones/copiaoculta', 'ConfigurationController@confBbc');
Route::post('configuraciones/notificaciones/copiaoculta', 'ConfigurationController@createBBC');
Route::get('configuraciones/notificaciones/copiaoculta/{id}/eliminar', 'ConfigurationController@deleteBBC');
