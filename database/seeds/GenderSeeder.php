<?php

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([ 
            'descripcion' => 'masculino'
        ]);

        DB::table('genders')->insert([ 
            'descripcion' => 'femenino'
        ]); 
    }
}
