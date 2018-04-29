<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');// ## Portada
            $table->date('fecha');// ## Portada
            $table->integer('ciudad_id')->nullable();// ## Portada

            $table->string('inscripto')->nullable();// ## Evento
            $table->string('resultado')->nullable();// ## Evento
            
            $table->integer('campeonato_id')->nullable();// ## Evento
            $table->integer('deporte_id')->nullable();// ## Evento
            $table->integer('especialidad_id')->nullable();// ## Evento
            $table->text('descripcion')->nullable();// ## Evento 
            $table->text('cronograma')->nullable();// ## Evento

            $table->string('direccion')->nullable();// Local Info
            $table->text('llegar_dormir')->nullable();// ## Local Info

            $table->text('contacto')->nullable();// Contacto
            $table->string('inscripcion')->nullable();// Contacto
            // $table->string('avatar')->nullable();//

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
        Schema::dropIfExists('eventos');
    }
}
