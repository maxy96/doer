<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTablas([
            'servicios',
            'tipos_servicios',
            'emps',
    		'users',
    		'perfiles',
            'estados_usuarios'		
    	]);
        $this->call(EstadosUsuariosSeeder::class);
        $this->call(PerfilesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(EmpsSeeder::class);
        $this->call(TiposServiciosSeeder::class);
        $this->call(ServiciosSeeder::class);
    }

    public function truncateTablas(array $tablas){
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tablas as $tabla) {
    		DB::table($tabla)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
