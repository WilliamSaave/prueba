<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudades = [
            ['cod_departamento' => '01', 'cod_ciudad' => '01001', 'nombre' => 'Leticia'],
            
          
           ['cod_departamento' => '01', 'cod_ciudad' => '01002', 'nombre' => 'Puerto Nariño'],
       
           ['cod_departamento' => '02', 'cod_ciudad' => '02036', 'nombre' => 'Itagüí'],
           ['cod_departamento' => '02', 'cod_ciudad' => '02041', 'nombre' => 'La Estrella'],
           ['cod_departamento' => '02', 'cod_ciudad' => '02069', 'nombre' => 'Rionegro'],
           
    
           ['cod_departamento' => '04', 'cod_ciudad' => '04074', 'nombre' => 'Puerto Colombia'],
           ['cod_departamento' => '04', 'cod_ciudad' => '04088', 'nombre' => 'Sabanalarga'],
           
      
           ['cod_departamento' => '05', 'cod_ciudad' => '05025', 'nombre' => 'Cartagena del Chairá'],
           ['cod_departamento' => '05', 'cod_ciudad' => '05034', 'nombre' => 'Margarita'],
           
        
           ['cod_departamento' => '06', 'cod_ciudad' => '06011', 'nombre' => 'Duitama'],
           ['cod_departamento' => '06', 'cod_ciudad' => '06029', 'nombre' => 'Sogamoso'],
           
         
           ['cod_departamento' => '08', 'cod_ciudad' => '08012', 'nombre' => 'Chinchiná'],
           ['cod_departamento' => '08', 'cod_ciudad' => '08079', 'nombre' => 'Manzanares'],
           
       
           ['cod_departamento' => '16', 'cod_ciudad' => '16081', 'nombre' => 'Fusagasugá'],
           ['cod_departamento' => '16', 'cod_ciudad' => '16092', 'nombre' => 'Soacha'],
           
       
           ['cod_departamento' => '44', 'cod_ciudad' => '44013', 'nombre' => 'Palmira'],
           ['cod_departamento' => '44', 'cod_ciudad' => '44030', 'nombre' => 'Buenaventura'],
           
          
           ['cod_departamento' => '22', 'cod_ciudad' => '22005', 'nombre' => 'Villa del Rosario'],
           ['cod_departamento' => '22', 'cod_ciudad' => '22015', 'nombre' => 'Los Patios'],
           
    
           ['cod_departamento' => '25', 'cod_ciudad' => '25012', 'nombre' => 'La Virginia'],
       
            ['cod_departamento' => '02', 'cod_ciudad' => '02001', 'nombre' => 'Medellín'],
            ['cod_departamento' => '02', 'cod_ciudad' => '02005', 'nombre' => 'Bello'],
            ['cod_departamento' => '02', 'cod_ciudad' => '02030', 'nombre' => 'Envigado'],
            
          
            ['cod_departamento' => '03', 'cod_ciudad' => '03001', 'nombre' => 'Arauca'],
            
      
            ['cod_departamento' => '04', 'cod_ciudad' => '04001', 'nombre' => 'Barranquilla'],
            ['cod_departamento' => '04', 'cod_ciudad' => '04078', 'nombre' => 'Soledad'],
            

            ['cod_departamento' => '05', 'cod_ciudad' => '05001', 'nombre' => 'Cartagena'],
            
    
            ['cod_departamento' => '06', 'cod_ciudad' => '06001', 'nombre' => 'Tunja'],
            
  
            ['cod_departamento' => '08', 'cod_ciudad' => '08001', 'nombre' => 'Manizales'],
            
     
            ['cod_departamento' => '09', 'cod_ciudad' => '09001', 'nombre' => 'Florencia'],
            

            ['cod_departamento' => '11', 'cod_ciudad' => '11001', 'nombre' => 'Popayán'],
            
        
            ['cod_departamento' => '12', 'cod_ciudad' => '12001', 'nombre' => 'Valledupar'],
            
    
            ['cod_departamento' => '13', 'cod_ciudad' => '13001', 'nombre' => 'Quibdó'],
            
  
            ['cod_departamento' => '15', 'cod_ciudad' => '15001', 'nombre' => 'Montería'],
            
   
            ['cod_departamento' => '16', 'cod_ciudad' => '16001', 'nombre' => 'Bogotá'],
            
 
            ['cod_departamento' => '17', 'cod_ciudad' => '17001', 'nombre' => 'Riohacha'],
            
           
            ['cod_departamento' => '18', 'cod_ciudad' => '18001', 'nombre' => 'Neiva'],
            
     
            ['cod_departamento' => '19', 'cod_ciudad' => '19001', 'nombre' => 'Santa Marta'],
            
      
            ['cod_departamento' => '20', 'cod_ciudad' => '20001', 'nombre' => 'Villavicencio'],
       
            ['cod_departamento' => '21', 'cod_ciudad' => '21001', 'nombre' => 'Pasto'],
            
         
            ['cod_departamento' => '22', 'cod_ciudad' => '22001', 'nombre' => 'Cúcuta'],
            
      
            ['cod_departamento' => '23', 'cod_ciudad' => '23001', 'nombre' => 'Mocoa'],
            
         
            ['cod_departamento' => '24', 'cod_ciudad' => '24001', 'nombre' => 'Armenia'],
            
            ['cod_departamento' => '25', 'cod_ciudad' => '25001', 'nombre' => 'Pereira'],
            
        
            ['cod_departamento' => '26', 'cod_ciudad' => '26001', 'nombre' => 'Bucaramanga'],
            
         
            ['cod_departamento' => '27', 'cod_ciudad' => '27001', 'nombre' => 'Sincelejo'],
            
            ['cod_departamento' => '41', 'cod_ciudad' => '41001', 'nombre' => 'Ibagué'],
            
            ['cod_departamento' => '44', 'cod_ciudad' => '44001', 'nombre' => 'Cali'],
            
        
            ['cod_departamento' => '47', 'cod_ciudad' => '47001', 'nombre' => 'Mitú'],
            
           
            ['cod_departamento' => '50', 'cod_ciudad' => '50001', 'nombre' => 'Puerto Carreño'],
            
         
            
            
        ];
        DB::table('ciudades')->insert($ciudades);
    }
}
