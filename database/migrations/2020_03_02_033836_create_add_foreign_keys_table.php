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
        // LA CREACION DE LA TABLA tipos_servicios SE ENCUENTRA EN LA MIGRACION DE SERVICIOS
        Schema::table('servicios', function (Blueprint $table) {
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id_emp')->on('emps')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tipoServicio_id')->unsigned();
            $table->foreign('tipoServicio_id')->references('id_tipoServicio')->on('tipos_servicios')->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA DE CLIENTES
        Schema::table('clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA DE OFRECIDOS
        Schema::table('ofrecidos', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id_cliente')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('estadoOfrecido_id')->unsigned();
            $table->foreign('estadoOfrecido_id')->references('id_estadoOfrecido')->on('estados_ofrecidos')
                    ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('ofrecidos', function (Blueprint $table) {
            $table->dropForeign(['estadoOfrecido_id']);
            $table->dropForeign(['cliente_id']);
        });
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropForeign(['emp_id']);
            $table->dropForeign(['tipoServicio_id']);
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
