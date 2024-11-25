<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->string('cod_departamento', 10)->primary();  // Llave primaria
            $table->string('nombre');  // Nombre del departamento
            $table->timestamps();  // Fechas de creación y actualización
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
    
};
