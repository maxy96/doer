<?php

use Illuminate\Database\Seeder;
use App\Models\Servicios;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Servicios::class, 10)->create();
    }
}
