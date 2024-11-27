<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAreaNullableInEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('area')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('area')->nullable(false)->change();
        });
    }
}

