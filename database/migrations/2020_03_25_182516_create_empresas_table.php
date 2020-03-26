<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias,25')->nullable();
            $table->unsignedBigInteger('tipoempresa_id')->nullable();
            $table->string('direccion,100')->nullable();
            $table->string('codpostal,10')->nullable();
            $table->string('localidad,100')->nullable();
            $table->string('provincia_id')->nullable();
            $table->string('pais_id', 2)->nullable();
            $table->string('nif,12')->nullable();
            $table->string('tfno,15')->nullable();
            $table->string('emailgral,100')->nullable();
            $table->string('emailadm,100')->nullable();
            $table->string('web,100')->nullable();
            $table->string('idioma', 2)->default('es');
            $table->string('cuentacontable',10)->nullable();
            $table->boolean('estado')->default('1');
            $table->string('observaciones')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
