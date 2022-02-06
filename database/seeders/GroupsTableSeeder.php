<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'element_id' => 1,
                'name' => 'Circulante',
                'description' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'element_id' => 1,
                'name' => 'Bancos',
                'description' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'element_id' => 1,
                'name' => 'Cobros',
                'description' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'element_id' => 1,
                'name' => 'Mercancia Consignada',
                'description' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'element_id' => 1,
                'name' => 'Almacen',
                'description' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'element_id' => 1,
                'name' => 'Edificios',
                'description' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'element_id' => 1,
                'name' => 'Vehiculos',
                'description' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'element_id' => 2,
                'name' => 'Pasivos a Corto Plazo',
                'description' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'element_id' => 2,
                'name' => 'Pasivos a Largo Plazo',
                'description' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'element_id' => 2,
                'name' => 'Prestamos',
                'description' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'element_id' => 2,
                'name' => 'Salarios',
                'description' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'element_id' => 2,
                'name' => 'Comisiones',
                'description' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'element_id' => 2,
                'name' => 'Costos de Venta',
                'description' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'element_id' => 3,
                'name' => 'Capital Contable',
                'description' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'element_id' => 3,
                'name' => 'Capital Social',
                'description' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'element_id' => 3,
                'name' => 'Reservas',
                'description' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'element_id' => 3,
                'name' => 'Superavit',
                'description' => '',
            ),



        ));
        
        
    }
}