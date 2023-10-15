<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ofertas_turisticas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->text('cartera_posibilidades');
            $table->double('precio');
            $table->string('imagen_principal');
            $table->text('imagenes');
            $table->unsignedBigInteger('lugar_turistico_id');
            $table->foreign('lugar_turistico_id')->references('id')->on('lugares_turisticos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas_turisticas');
    }
};
