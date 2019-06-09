<?php

Route::get('/', 'ConfigurationController@resumen');
Route::get('notificaciones', 'ConfigurationController@resumen');
Route::get('planificacion', 'ConfigurationController@planificacion');


///////////////////////////////////////////////////////////////////////////////////////////////////////
//NOTIFICACIONES
//Ruta para importar CVS
Route::post('notificaciones/importarDatabase', 'TeacherController@importarDatabase');
//Para utilizarlo con button
Route::get('notificaciones/notificar', 'ConfigurationController@indexNotificar');
Route::post('notificaciones/notificacion', 'TeacherController@mail');
Route::get('notificaciones/reporte', 'ConfigurationController@indexConfig');
//Configuraciones
Route::get('configuraciones/notificaciones/data', 'TeacherController@index');
Route::get('configuraciones/notificaciones/email', 'EmailController@confEmail');
Route::post('configuraciones/notificaciones/email', 'EmailController@updateEmail');
Route::get('configuraciones/notificaciones/copiaoculta', 'ConfigurationController@confBbc');
Route::post('configuraciones/notificaciones/copiaoculta', 'ConfigurationController@createBBC');
Route::get('configuraciones/notificaciones/copiaoculta/{id}/eliminar', 'ConfigurationController@deleteBBC');
////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('configuraciones/planificacion/aulas', 'TeacherController@index');