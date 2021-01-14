<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cargo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('tb_cargoempleados')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        
        DB::table('tb_cargoempleados')->insert([
            'v_descripcion' => 'Director',
            'estado' => '1',
        ]);
    }
}
