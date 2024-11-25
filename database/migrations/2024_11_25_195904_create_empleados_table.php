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
        Schema::create('empleados', function (Blueprint $table) {
            // Usamos 'identificacion' como clave primaria
            $table->string('identificacion')->primary();  // La columna 'identificacion' será la clave primaria
            $table->string('nombres');  // Nombres del empleado
            $table->string('apellidos');  // Apellidos del empleado
            $table->string('telefono');  // Teléfono del empleado
            $table->string('ciudad_cod')->nullable();  // Llave foránea a la ciudad (puede ser nula)
            $table->string('departamento_cod');  // Llave foránea al departamento
            $table->enum('cargo', ['Jefe', 'colaborador', 'colaboradora']);  // Cargo (Enum)
            $table->string('jefe')->nullable();  // Llave foránea a otro empleado (jefe)
            $table->string('area');  // Llave foránea al área
            $table->timestamps();  // Fechas de creación y actualización
    
            // Relación con la tabla 'ciudades' (foránea)
            $table->foreign('ciudad_cod')->references('cod_ciudad')->on('ciudades')->onDelete('set null');
            // Relación con la tabla 'departamentos' (foránea)
            $table->foreign('departamento_cod')->references('cod_departamento')->on('departamentos')->onDelete('cascade');
            // Relación con la tabla 'empleados' para jefe (foránea)
    
    
            // Índice único en la columna 'identificacion'
            $table->unique('identificacion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
    
    
};
