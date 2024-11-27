<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = [
            ['cod_departamento' => '01', 'nombre' => 'Amazonas'],
            ['cod_departamento' => '02', 'nombre' => 'Antioquia'],
            ['cod_departamento' => '03', 'nombre' => 'Arauca'],
            ['cod_departamento' => '04', 'nombre' => 'Atlántico'],
            ['cod_departamento' => '05', 'nombre' => 'Bolívar'],
            ['cod_departamento' => '06', 'nombre' => 'Boyacá'],
            ['cod_departamento' => '08', 'nombre' => 'Caldas'],
            ['cod_departamento' => '09', 'nombre' => 'Caquetá'],
            ['cod_departamento' => '11', 'nombre' => 'Cauca'],
            ['cod_departamento' => '12', 'nombre' => 'Cesar'],
            ['cod_departamento' => '13', 'nombre' => 'Chocó'],
            ['cod_departamento' => '15', 'nombre' => 'Córdoba'],
            ['cod_departamento' => '16', 'nombre' => 'Cundinamarca'],
            ['cod_departamento' => '17', 'nombre' => 'La Guajira'],
            ['cod_departamento' => '18', 'nombre' => 'Huila'],
            ['cod_departamento' => '19', 'nombre' => 'Magdalena'],
            ['cod_departamento' => '20', 'nombre' => 'Meta'],
            ['cod_departamento' => '21', 'nombre' => 'Nariño'],
            ['cod_departamento' => '22', 'nombre' => 'Norte de Santander'],
            ['cod_departamento' => '23', 'nombre' => 'Putumayo'],
            ['cod_departamento' => '24', 'nombre' => 'Quindío'],
            ['cod_departamento' => '25', 'nombre' => 'Risaralda'],
            ['cod_departamento' => '26', 'nombre' => 'Santander'],
            ['cod_departamento' => '27', 'nombre' => 'Sucre'],
            ['cod_departamento' => '41', 'nombre' => 'Tolima'],
            ['cod_departamento' => '44', 'nombre' => 'Valle del Cauca'],
            ['cod_departamento' => '47', 'nombre' => 'Vaupés'],
            ['cod_departamento' => '50', 'nombre' => 'Vichada'],
            ['cod_departamento' => '52', 'nombre' => 'Bogotá'],
        ];

        // Inserta los departamentos en la base de datos
        DB::table('departamentos')->insert($departamentos);
    }
}
