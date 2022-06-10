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
        Schema::create('localcomercial', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 120);
            $table->string('direccion', 60);
            $table->string('telefono_fijo', 20);
            $table->string('telefono_movil', 20);
            $table->string('email', 60);
            $table->string('identificacion', 60);
            //
            $table->unsignedBigInteger('tipo_identificacion_comercial_id');
            $table->foreign("tipo_identificacion_comercial_id")->references("id")->on("tipo_identificacion_comercial")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('localcomercial');
    }
};
