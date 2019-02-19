<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['docente', 'email','asignatura','descripcion','seccion','medio','alumno','correoAlumno','apellidos'];
}
