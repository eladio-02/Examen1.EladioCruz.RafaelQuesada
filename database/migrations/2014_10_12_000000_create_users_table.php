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
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('type');
            $table->rememberToken();
            $table->timestamps();
        });

        /*Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('Apellido');
            $table->string('email');
            $table->string('password');
            $table->string('birthday');
            $table->string('status');
            $table->integer('active');
            $table->string('sexo');
            $table->double('descuento');
            $table->timestamps();
        });
        
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });*/

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
