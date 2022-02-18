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
                'element_id' => 3,
                'group_id' => 15,
                'type_id' => 1,
                'reference_id' => NULL,
                'code' => 320,
                'name' => 'Gerardo Belot',
                'description' => 'Capital Social Gerardo Belot',
                'created_at' => '2022-02-18 01:47:21',
                'updated_at' => '2022-02-18 01:47:21',
            ),
            1 => 
            array (
                'id' => 2,
                'element_id' => 3,
                'group_id' => 15,
                'type_id' => 1,
                'reference_id' => NULL,
                'code' => 321,
                'name' => 'Lizeth Izaguire',
                'description' => 'Capital social Lizeth Izaguirre',
                'created_at' => '2022-02-18 01:47:47',
                'updated_at' => '2022-02-18 01:47:47',
            ),
            2 => 
            array (
                'id' => 3,
                'element_id' => 1,
                'group_id' => 2,
                'type_id' => 2,
                'reference_id' => NULL,
                'code' => 120,
                'name' => 'Banco Atlantida',
                'description' => NULL,
                'created_at' => '2022-02-18 01:48:05',
                'updated_at' => '2022-02-18 01:48:05',
            ),
            3 => 
            array (
                'id' => 4,
                'element_id' => 1,
                'group_id' => 2,
                'type_id' => 1,
                'reference_id' => 3,
                'code' => 1201,
                'name' => '50732 - Cuantas Cheques',
                'description' => 'Cuenta de pagos - Banco Atlantida',
                'created_at' => '2022-02-18 01:48:31',
                'updated_at' => '2022-02-18 01:48:31',
            ),
            4 => 
            array (
                'id' => 5,
                'element_id' => 1,
                'group_id' => 2,
                'type_id' => 1,
                'reference_id' => 3,
                'code' => 1202,
                'name' => 'Atl 1233-45 ',
                'description' => 'Banco Atlantida - Cuantas Corriente',
                'created_at' => '2022-02-18 01:49:21',
                'updated_at' => '2022-02-18 01:49:21',
            ),
            5 => 
            array (
                'id' => 6,
                'element_id' => 2,
                'group_id' => 10,
                'type_id' => 1,
                'reference_id' => NULL,
                'code' => 230,
                'name' => 'Prestamo inicial Banco Atlantida',
                'description' => 'Prestamo de capital Banco Atlantida',
                'created_at' => '2022-02-18 01:50:47',
                'updated_at' => '2022-02-18 01:50:47',
            ),
        ));
        
        
    }
}