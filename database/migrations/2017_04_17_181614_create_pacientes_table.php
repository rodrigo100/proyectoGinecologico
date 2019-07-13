<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id_paciente');
            $table->string('ci');
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->date('fecha_nac');
            $table->enum('estado_civil',['sol',
                'cas',
                'viu',
                'div',
                'unl']);
            $table->string('direccion');
            $table->integer('telefono');
            // $table->integer('id_usuario');
            // $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
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
        Schema::dropIfExists('pacientes');
    }
}
