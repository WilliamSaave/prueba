<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Ejecutar las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('email')->unique(); 
            $table->string('password'); 
            $table->enum('role', ['admin', 'colla'])->default('admin'); // Enum para el rol con valor por defecto 'admin'
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }
 /**

     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
