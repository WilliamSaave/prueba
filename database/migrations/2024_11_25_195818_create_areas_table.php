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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();  // ID auto incrementable
            $table->string('nombre');  // Nombre del área
            $table->timestamps();  // Fechas de creación y actualización
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('areas');
    }
    
};
