<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();;     // Nombres
            $table->string('lastname')->nullable();; // Apellidos
            $table->string('identity')->unique()->nullable();  // Cedula
            $table->string('genre', 1)->nullable();; // m => masculino, f => femenino           
            $table->date('date')->nullable();;       // Fecha de Nacimiento
            $table->integer('age')->nullable();;     // Edad
            $table->string('phone')->nullable();;    // Teléfono
            $table->string('email')->unique(); // Correo electrónico                     
            $table->string('password');        // Contraseña
            $table->string('define')->default('no');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
