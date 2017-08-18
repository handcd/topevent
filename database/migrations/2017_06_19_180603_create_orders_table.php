<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            // Campos Orden -> Configurador
            $table->date('fecha');
            $table->integer('duracion');
            $table->integer('tipo_evento');
            $table->integer('id_lugar_evento');
            $table->string('nombre_lugar')->nullable();
            $table->string('direccion_lugar')->nullable();
            $table->integer('no_invitados');
            $table->string('introduccion');
            $table->integer('id_limpieza');

            // Campos Orden -> Administrador
            $table->boolean('aprobado')->nullable();
            $table->string('notas')->nullable();
            $table->float('cotizacion', 8, 2)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
