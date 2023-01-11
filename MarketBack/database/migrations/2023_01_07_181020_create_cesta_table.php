<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cesta', function (Blueprint $table) {
            $table->string('Usuario');
            $table->integer('Producto');
            $table->foreign('Usuario')->references('Correo')->on('usuario')->onDelete('cascade')->unique();
            $table->foreign('Producto')->references('Codigo')->on('producto')->onDelete('cascade')->unique();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cesta');
    }
}
