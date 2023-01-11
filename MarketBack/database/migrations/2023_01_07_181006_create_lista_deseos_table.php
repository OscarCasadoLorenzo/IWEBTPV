<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaDeseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_deseos', function (Blueprint $table) {
            $table->integer('Codigo')->primary();
            $table->string('Nombre');
            $table->boolean('Publico');
            $table->string('Cliente');
            $table->foreign('Cliente')->references('Correo')->on('usuario')->onDelete('cascade')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_deseos');
    }
}
