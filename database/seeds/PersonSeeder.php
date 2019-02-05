<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([ 
            'nombre' => 'juan',
            'estado' => 'inactivo',
            'idGender' => 1,
        ]);

        DB::table('persons')->insert([ 
            'nombre' => 'fanny',
            'estado' => 'inactivo',
            'idGender' => 2,
        ]);
    }
}
