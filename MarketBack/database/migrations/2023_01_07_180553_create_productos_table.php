<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
           
            $table->string('Nombre');
            $table->integer('Codigo')->primary();
            $table->integer('Stock');
            $table->float('Precio',8,2);
            $table->string('Proveedor');
            $table->string('Imagen');
            $table->string('Descripcion');
            $table->boolean('Destacado');
            $table->string('Subcategoria');
            $table->foreign('Subcategoria')->references('Nombre')->on('subcategoria')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
