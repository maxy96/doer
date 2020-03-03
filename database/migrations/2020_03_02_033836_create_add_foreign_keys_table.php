<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     * Definicion de relaciones foreign key
     * @return void
     */
    public function up()
    {
        //TABLA USUARIOS
        Schema::table('users', function (Blueprint $table) {
            $table->integer('perfil_id')->unsigned();
            $table->foreign('perfil_id')->references('id_perfil')->on('perfiles')
                    ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('estadoUsuario_id')->unsigned();
            $table->foreign('estadoUsuario_id')->references('id_estadoUsuario')->on('estados_usuarios')->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA EMPRESAS Y EMPRENDEDORES
        Schema::table('emps', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_user')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA DE SERVICIOS
        Schema::table('servicios', function (Blueprint $table) {
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id_emp')->on('emps')->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA DE CLIENTES
        Schema::table('clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropForeign(['emp_id']);
        });
         Schema::table('emps', function (Blueprint $table) {
            $table->dropForeign('emps_user_id_foreign');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_estadoUsuario_id_foreign');
            $table->dropForeign('users_perfil_id_foreign');
        });
       
    }
}
