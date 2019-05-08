<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('emails', function (Blueprint $table) {

            $table->increments('id');
            $table->string('asunto')->nullable();
            $table->string('saludoinicial')->nullable();
            $table->string('primerparrafo')->nullable();
            $table->string('segundoparrafo')->nullable();
            $table->string('facilidad1')->nullable();
            $table->string('facilidad2')->nullable();
            $table->string('facilidad3')->nullable();
            $table->string('saludofinal')->nullable();
            $table->string('firma')->nullable();            
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
        Schema::dropIfExists('emails');
    }

}
