<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkCarbonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_carbon', function (Blueprint $table) {

            $table->increments('id', false, true);

            $table->string('type', 1);
            $table->string('genre', 1);
            $table->string('age', 2);
            $table->string('local');
            $table->string('email');

            $table->string('bus', 2);
            $table->string('transmi', 2);
            $table->string('taxi', 2);
            $table->string('taxi_mas', 2);
            $table->string('moto', 2);
            $table->string('moto_el', 2);
            $table->string('bici', 2);
            $table->string('avion' , 2);
            $table->string('carne', 2);
            $table->string('frutas', 2);
            $table->string('frutas_loc', 2);
            $table->string('pasteles', 2);
            $table->string('galletas', 2);
            $table->string('bebidas', 2);
            $table->string('cafe', 2);
            $table->string('oficina', 2);
            $table->string('salon', 2);
            $table->string('pc', 2);
            $table->string('celular', 2);
            $table->string('cuadernos', 2);
            $table->string('libros', 2);
            $table->string('fotocopias', 2);
            $table->string('vestidos', 2);
            $table->string('zapatos', 2);
            $table->string('sanitario', 2);
            $table->string('lavar', 2);
            $table->string('ducha', 2);
            $table->string('ducha_diez', 2);
            $table->string('ducha_quince', 2);
            $table->string('hc');  

            // 1=>Activo , 2=>Inactivo
            $table->integer('state')->default(1) ;

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
        Schema::dropIfExists('mark_carbon');
    }
}
