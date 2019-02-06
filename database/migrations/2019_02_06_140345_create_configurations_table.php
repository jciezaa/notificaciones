<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('configurations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('campo');
            $table->string('valorOne')->nullable();
            $table->string('valorTwo')->nullable();
            $table->string('valorThree')->nullable();
            
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
        Schema::dropIfExists('configurations');
    }

}
