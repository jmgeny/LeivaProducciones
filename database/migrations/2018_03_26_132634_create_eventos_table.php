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

            $table->string('nombre');//nombre del evento
            $table->date('fecha');
            $table->string('direccion');
            $table->integer('ciudad_id')->nullable();//De la tabla ciudades
            $table->text('descripcion')->nullable();//categorias, premios
            $table->integer('campeonato_id')->nullable();//word cup, campeonato reg
            $table->integer('deporte_list')->nullable();//Triatlon, duatlon, ateletismo
            $table->integer('especialidad_id')->nullable();//short, standard, 100m, half
            $table->text('cronograma')->nullable();//cronograma de actividades
            $table->text('llegar_dormir')->nullable();//como llegal dormir
            $table->text('contacto')->nullable();//detalle de contacto
            $table->string('inscripcion')->nullable();//como inscribirce
            $table->string('avatar')->nullable();//imagen del evento

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
