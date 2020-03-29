<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50)->nullable();
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->string('cargo',50)->nullable();
            $table->string('departamento',50)->nullable();
            $table->string('nif',15)->nullable();
            $table->string('tfno',15)->nullable();
            $table->string('movil',15)->nullable();
            $table->string('email',100)->nullable();
            $table->string('email2',100)->nullable();
            $table->string('direccion',150)->nullable();
            $table->string('cp',10)->nullable();
            $table->string('poblacion',50)->nullable();
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
        Schema::dropIfExists('contactos');
    }
}
