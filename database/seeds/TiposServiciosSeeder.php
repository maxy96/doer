<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tservicios = ["cortador", "electrico", "herrero"];
        foreach ($tservicios as $tservicio) {
             DB::table('tipos_servicios')->insert(['ts_descripcion' => $tservicio]);
        }  
    }
}
