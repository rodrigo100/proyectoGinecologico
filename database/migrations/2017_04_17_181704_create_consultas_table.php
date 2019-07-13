<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
           
             $table->increments('id_consulta');
            $table->date('fecha');
            $table->time('hora');
            $table->string('detalle',800);
            // $table->integer('id_paciente');
            // $table->foreign('id_paciente')->references('id_paciente')->on('paciente');
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
        Schema::dropIfExists('consultas');
    }
}
