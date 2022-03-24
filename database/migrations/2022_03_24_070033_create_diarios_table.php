<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('producto');
            $table->decimal('cantidad', 10, 2);
            $table->decimal('monto', 10, 2);
            $table->string('tipo_pago');
            $table->integer('tipo_venta');
            $table->unsignedBigInteger('venta_id')->nullable();
            $table->foreign('venta_id')->references('id')->on('ventas');
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
        Schema::dropIfExists('diarios');
    }
};
