<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();

            $table->string('Direccion');
            $table->string('Barrio');
            $table->string('Localidad');
            $table->string('Partido');
            $table->string('Provincia');
            $table->float('Precio');
            $table->string('Tipo');
            $table->string('Foto');
            $table->Boolean('Destacada');
            $table->text('Descripcion');
            $table->string('Operacion');

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
        Schema::dropIfExists('inmuebles');
    }
}
