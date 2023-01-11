<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstarEnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estar_en', function (Blueprint $table) {
            $table->integer('Lista');
            $table->integer('Producto');
            $table->foreign('Lista')->references('Codigo')->on('lista_deseos')->onDelete('cascade')->unique();
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
        Schema::dropIfExists('estar_en');
    }
}
