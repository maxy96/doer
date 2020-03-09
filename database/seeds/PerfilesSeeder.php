<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfiles = ["admin", "cliente", "empresa"];
        foreach ($perfiles as $perfil) {
             DB::table('perfiles')->insert(['descripcion' => $perfil]);
        }   
    }
}
