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
                'code' => 1,
                'created_at' => '2022-02-03 15:48:09',
                'id' => 1,
                'name' => 'Activos',
                'reference_id' => NULL,
                'updated_at' => '2022-02-03 15:48:09',
            ),
            1 => 
            array (
                'code' => 2,
                'created_at' => '2022-02-03 15:48:19',
                'id' => 2,
                'name' => 'Pasivos',
                'reference_id' => NULL,
                'updated_at' => '2022-02-03 15:48:19',
            ),
            2 => 
            array (
                'code' => 3,
                'created_at' => '2022-02-03 15:48:27',
                'id' => 3,
                'name' => 'Capital',
                'reference_id' => NULL,
                'updated_at' => '2022-02-03 15:48:27',
            ),
            3 => 
            array (
                'code' => 11,
                'created_at' => '2022-02-03 15:48:39',
                'id' => 4,
                'name' => 'Circulantes',
                'reference_id' => 1,
                'updated_at' => '2022-02-03 15:48:39',
            ),
            4 => 
            array (
                'code' => 111,
                'created_at' => '2022-02-03 15:50:39',
                'id' => 5,
                'name' => 'Efectivos',
                'reference_id' => 4,
                'updated_at' => '2022-02-03 15:50:39',
            ),
            5 => 
            array (
                'code' => 1111,
                'created_at' => '2022-02-03 15:50:58',
                'id' => 6,
                'name' => 'Caja',
                'reference_id' => 5,
                'updated_at' => '2022-02-03 15:50:58',
            ),
            6 => 
            array (
                'code' => 11111,
                'created_at' => '2022-02-03 15:51:17',
                'id' => 7,
                'name' => 'Caja Chica',
                'reference_id' => 6,
                'updated_at' => '2022-02-03 15:51:17',
            ),
            7 => 
            array (
                'code' => 11112,
                'created_at' => '2022-02-03 15:51:36',
                'id' => 8,
                'name' => 'Caja General',
                'reference_id' => 6,
                'updated_at' => '2022-02-03 15:51:36',
            ),
            8 => 
            array (
                'code' => 1112,
                'created_at' => '2022-02-03 17:36:52',
                'id' => 9,
                'name' => 'Bancos',
                'reference_id' => 4,
                'updated_at' => '2022-02-03 17:36:52',
            ),
            9 => 
            array (
                'code' => 11121,
                'created_at' => '2022-02-03 17:37:51',
                'id' => 10,
                'name' => 'Atlantida',
                'reference_id' => 9,
                'updated_at' => '2022-02-03 17:37:51',
            ),
            10 => 
            array (
                'code' => 11122,
                'created_at' => '2022-02-03 17:38:42',
                'id' => 11,
                'name' => 'Ficohsa',
                'reference_id' => 9,
                'updated_at' => '2022-02-03 17:38:42',
            ),
            11 => 
            array (
                'code' => 21,
                'created_at' => '2022-02-03 17:39:31',
                'id' => 12,
                'name' => 'Pasivo Corriente',
                'reference_id' => 2,
                'updated_at' => '2022-02-03 17:39:31',
            ),
            12 => 
            array (
                'code' => 211,
                'created_at' => '2022-02-03 17:39:56',
                'id' => 13,
                'name' => 'Cuentas por Pagar',
                'reference_id' => 12,
                'updated_at' => '2022-02-03 17:39:56',
            ),
            13 => 
            array (
                'code' => 2111,
                'created_at' => '2022-02-03 17:40:26',
                'id' => 14,
                'name' => 'Cuentas por Pagar',
                'reference_id' => 13,
                'updated_at' => '2022-02-03 17:40:26',
            ),
            14 => 
            array (
                'code' => 21111,
                'created_at' => '2022-02-03 17:40:52',
                'id' => 15,
                'name' => 'Cuentas por Pagar Comerciales',
                'reference_id' => 14,
                'updated_at' => '2022-02-03 17:40:52',
            ),
            15 => 
            array (
                'code' => 21112,
                'created_at' => '2022-02-03 17:41:17',
                'id' => 16,
                'name' => 'Cuentas por Pagar Contratistas',
                'reference_id' => 14,
                'updated_at' => '2022-02-03 17:41:17',
            ),
            16 => 
            array (
                'code' => 31,
                'created_at' => '2022-02-03 17:41:49',
                'id' => 17,
                'name' => 'Capital Contable',
                'reference_id' => 3,
                'updated_at' => '2022-02-03 17:41:49',
            ),
            17 => 
            array (
                'code' => 311,
                'created_at' => '2022-02-03 17:42:20',
                'id' => 18,
                'name' => 'Capital',
                'reference_id' => 17,
                'updated_at' => '2022-02-03 17:42:20',
            ),
        ));
        
        
    }
}