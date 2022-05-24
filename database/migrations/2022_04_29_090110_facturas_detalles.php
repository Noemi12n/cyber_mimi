<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacturasDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas_detalles', function (Blueprint $table) {
            $table->id('fad_id');
            $table->foreignId('fac_id')->references('fac_id')->on('facturas');
            $table->foreignId('pro_id')->references('pro_id')->on('productos');
            $table->string('fad_cantidad');
            $table->string('fad_vu');
            $table->string('fad_vt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('facturas_detalles');
    }
}
