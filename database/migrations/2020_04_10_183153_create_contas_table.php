<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->date('fechaasiento');
            $table->date('fechaafactura')->nullable();
            $table->string('factura',100)->nullable();
            $table->string('tipo',1)->nullable();
            $table->date('proveedor_id')->nullable();
            $table->date('cliente_id')->nullable();
            $table->decimal('base21', 8, 2)->nullable();
            $table->decimal('iva21', 8, 2)->nullable();
            $table->decimal('base10', 8, 2)->nullable();
            $table->decimal('iva10', 8, 2)->nullable();
            $table->decimal('base4', 8, 2)->nullable();
            $table->decimal('baseretencion', 8, 2)->nullable();
            $table->decimal('porcentajeretencion', 8, 2)->nullable();
            $table->decimal('retencion', 8, 2)->nullable();
            $table->decimal('baserecargo', 8, 2)->nullable();
            $table->decimal('porcentajerecargo', 8, 2)->nullable();
            $table->decimal('recargo', 8, 2)->nullable();
            $table->boolean('bloqueado')->default(0);
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
        Schema::dropIfExists('contas');
    }
}
