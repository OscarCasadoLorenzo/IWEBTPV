<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContieneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contiene', function (Blueprint $table) {
            $table->integer('Pedido');
            $table->integer('Producto');
            $table->foreign('Pedido')->references('Numpedido')->on('pedido')->onDelete('cascade')->unique();
            $table->foreign('Producto')->references('Codigo')->on('producto')->onDelete('cascade')->unique();
            
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
        Schema::dropIfExists('contiene');
    }
}
