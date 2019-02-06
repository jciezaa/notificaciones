<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('teachers', function (Blueprint $table) {
                
            $table->increments('id');
            $table->string('docente');
            $table->string('email');
            $table->string('asignatura');
            $table->string('descripcion');
            $table->string('seccion');
            $table->string('medio');
            $table->string('alumno');
            $table->string('correoAlumno');
            $table->string('apellidos');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
