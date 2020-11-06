<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacions', function (Blueprint $table) {
            $table->id();
            $table->string('factura',8)->unique()->index()->nullable();
            $table->date('fechafactura')->nullable();
            $table->date('fechavto')->nullable();
            $table->date('fechaexport')->nullable();
            $table->foreignId('empresa_id')->constrained('empresas');
            $table->foreignId('condpago_id')->constrained('condicion_pagos');
            $table->boolean('mailenviado')->default(0);
            $table->boolean('pagada')->default(0);
            $table->string('refcliente',50)-> nullable();
            $table->string('email')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('facturacions');
    }
}
