<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados =  ["activo", "inactivo"];
        foreach ($estados as $estado) {
             DB::table('estados_usuarios')->insert(['descripcion' => $estado]);
        }   
    }
}
