<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ElementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('elements')->delete();
        
        \DB::table('elements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Activo',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pasivo',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Capital',
            ),
        ));
        
        
    }
}