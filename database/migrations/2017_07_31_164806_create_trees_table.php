<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            
            $table->increments('id')->unsigned();
            
            // Nombre cientifico
            $table->string('name'); 

            // Nombre comun
            $table->string('name_comun');
            
            //Localizacion
            // 1=>'anden', 2=>'parque', 3=>'ribera', 4=>'rio', 5=>'antejardin', 6=>'separador', 7=>'borde carretera', 8=>'ferrocarril', 9=>'otro'
            $table->string('place')->default(2); 
            
            //Estado 
            // 1=>'living', 2=>'sick', 3=>'died'
            $table->string('healt')->default(1);

            //Altura
            $table->string('tall', 4);

            //Altura Rama
            $table->string('tall_branch', 4);

            //Porcentaje pérdida de copa
            $table->string('top', 4);

            //Exposicion de la copa
            $table->string('shown', 4);
            
            //Sombra de la copa
            $table->string('shadown', 4);

            //Perimetro cuello del tronco
            $table->string('perimeter', 4);

            //Permitero altura del pecho
            $table->string('perimeter_chest', 4);

            //Numero de troncos presentes
            $table->string('numbers_trunk', 4);

            //Diametro N - S de la copa
            $table->string('diameter_north', 4);

            //Diametro E - O de la copa
            $table->string('diameter_west', 4);

            //Porcentaje de ramas respecto al tronco
            $table->string('branch_trunk', 4);

            //Presencia de nidos
            // 1=>'nothing', 2=>'between_1_2', 3=>'between_3_5', 4=>'major_5'
            $table->string('nest')->default(2);

            //Presencia de murcielagos        
            // 1>=Si , 2=>No    
            $table->boolean('bats')->default(1);

            //Presencia de iguanas
            // 1>=Si , 2=>No    
            $table->boolean('iguana')->default(1);
            
            //Presencia de ardillas
            // 1>=Si , 2=>No    
            $table->boolean('chipmunk')->default(1);
            
            //Presencia de zariguellas
            // 1>=Si , 2=>No    
            $table->boolean('zariguella')->default(1);

            //Presencia de nido de insectos
            // 1>=Si , 2=>No    
            $table->boolean('nest_insect')->default(2);

            //Presencia de palomas
            // 1>=Si , 2=>No    
            $table->boolean('dove')->default(1);

            //Presencia ataque hormigas arrieras
            // 1>=Si , 2=>No    
            $table->boolean('ants')->default(2);

            //Raiz expuesta
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('root_tree', 1)->default(2);

            //Tronco torcido
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('trunk_distorted', 1)->default(1);

            //Inclinacion de arbol
            $table->string('angle_tree', 4);

            //Ramas secas
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('branch_dry', 1)->default(2);

            //Raiz con plagas o enfermedad
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('root_healt', 1)->default(2);   

            //Tronco plagas o enfermedades
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('trunk_healt', 1)->default(2);            
            
            //Copa plagas o enfermedades
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('cup_healt', 1)->default(1);            
            
            //Heridas en raices
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4>='major_75'
            $table->string('root_wounds', 1)->default(1);            
            
            //Heridas en tallo
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('steam_wounds', 1)->default(1);            
            
            //Heridas en ramas
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('branch_wounds', 1)->default(1);            
            
            //Podas anti tecnicas
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('cut_tecnic', 1)->default(1);            
            
            //% de termita en tronco
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('trunk_wounds', 1)->default(1);            
            
            //% de Pajarita (Parasito, Injerto)
            // 1=>'between_0_25', 2=>'between_25_50', 3=>'between_50_75', 4=>'major_75'
            $table->string('parasite', 1)->default(1);            
            
            //% Bajo copa en tierra
            $table->string('cup_land', 4);

            //% Bajo copa en pasto
            $table->string('cup_floor', 4);

            //% Bajo copa en arbustos
            $table->string('cup_bush', 4);

            //% Bajo copa en pavimento
            $table->string('cup_pavement', 4);

            //Conflicto actual estructuras en suelo
            // 1=>'no_existent', 2=>'moderate', 3=>'severe'
            $table->string('structure_floor', 1)->default(2);

            //conflicto actual infraestructura privada fachadas o techos
            // 1=>'no_existent', 2=>'moderate', 3=>'severe'
            $table->string('infraestructure_private', 1)->default(2);

            //conflicto actual infraestructura publica
            // 1=>'no_existent', 2=>'moderate', 3=>'severe'
            $table->string('infraestructure_public', 1)->default(2);

            //conflicto actual cuerdas de luz
            // 1=>'no_existent', 2=>'moderate', 3=>'severe'
            $table->string('cable_light', 1)->default(2);

            //Distancia tubería gas a raices
            $table->string('distance_gas', 4);

            //Distancia infraestructura piso a tronco
            $table->string('distance_floor', 4);

            //Distancia infraestructura paredes o techos
            $table->string('distance_wall', 4);

            //Distancia horizontal cuerdas a ramas
            $table->string('distance_horizontal', 4);

            //Distancia vertical cuerdas a ramas
            $table->string('distance_vertical', 4);

            //Latitud
            $table->float('latitud', 10, 6);
            
            //Longitud
            $table->float('longitud', 10, 6);

            //Estado 1 => activo   2 => inactivo
            $table->boolean('state')->default("1");

            //Causa
            $table->string('cause')->nullable();

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
        Schema::dropIfExists('trees');
    }
}
