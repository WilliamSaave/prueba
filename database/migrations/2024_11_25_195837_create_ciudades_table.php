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
        Schema::create('ciudades', function (Blueprint $table) {
            $table->string('cod_departamento');  // Llave foránea a departamentos
            $table->string('cod_ciudad', 10)->primary();  // Llave primaria
            $table->string('nombre');  // Nombre de la ciudad
            $table->timestamps();  // Fechas de creación y actualización
    
            // Llave foránea a la tabla departamentos
            $table->foreign('cod_departamento')->references('cod_departamento')->on('departamentos')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
    
};
