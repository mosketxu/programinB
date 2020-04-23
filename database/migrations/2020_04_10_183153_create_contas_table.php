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
            $table->date('fechafactura')->nullable();
            $table->string('factura',100)->nullable();
            $table->string('tipo',1)->nullable();
            $table->bigInteger('provcli_id')->nullable();
            $table->string('concepto')->nullable();
            $table->string('categoria')->nullable();
            $table->decimal('base21', 8, 2)->default(0);
            $table->decimal('iva21', 8, 2)->default(0);
            $table->decimal('base10', 8, 2)->default(0);
            $table->decimal('iva10', 8, 2)->default(0);
            $table->decimal('base4', 8, 2)->default(0);
            $table->decimal('iva4', 8, 2)->default(0);
            $table->decimal('exento', 8, 2)->default(0);
            $table->decimal('baseretencion', 8, 2)->default(0);
            $table->decimal('porcentajeretencion', 8, 2)->default(0);
            $table->decimal('retencion', 8, 2)->default(0);
            $table->decimal('baserecargo', 8, 2)->default(0);
            $table->decimal('porcentajerecargo', 8, 2)->default(0);
            $table->decimal('recargo', 8, 2)->default(0);
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