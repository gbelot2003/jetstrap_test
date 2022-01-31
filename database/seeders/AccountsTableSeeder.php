<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accounts')->delete();
        
        \DB::table('accounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 1,
                'reference_id' => NULL,
                'name' => 'Activos',
                'created_at' => '2022-01-31 07:27:21',
                'updated_at' => '2022-01-31 07:27:21',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 2,
                'reference_id' => NULL,
                'name' => 'Pasivos',
                'created_at' => '2022-01-31 07:28:11',
                'updated_at' => '2022-01-31 07:28:11',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 3,
                'reference_id' => NULL,
                'name' => 'Capital',
                'created_at' => '2022-01-31 07:28:25',
                'updated_at' => '2022-01-31 07:28:25',
            ),
        ));
        
        
    }
}