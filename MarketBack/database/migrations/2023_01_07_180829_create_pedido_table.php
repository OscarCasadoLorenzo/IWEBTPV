<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            
            $table->string('Estado');
            $table->date('Fecha');
            $table->string('Cliente');
            $table->integer('Numpedido');
            $table->foreign('Cliente')->references('Correo')->on('usuario')->onDelete('cascade')->unique();
            $table->primary('Numpedido');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
