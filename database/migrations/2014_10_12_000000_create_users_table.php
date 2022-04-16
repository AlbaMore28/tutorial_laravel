<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id(); //Interger unsigned increment
            $table->string('name'); //varchar
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //verifica correo electronico y se alamacena la fecha de verificacion (nullable para que pueda estar a null)
            $table->string('password');
            $table->rememberToken(); //si el usuario mantiene la opcion de mantener sesion iniciada
            $table->timestamps(); //crea columnas created_at y update_at
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
