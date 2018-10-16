<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('property_statuses')->delete();

        DB::table('property_statuses')->insert(array (
            0 =>
                array (
                    'id' => 5,
                    'type' => 'index',
                    'description'=> '{"metadata":["property","openhouse"],"class":["RD_1","RA_2","MF_3","LD_4"]}'
                ),

            1 =>
                array (
                    'id' => 1,
                    'type' => 'active',
                    'description'=> ''
                ),
            2 =>
                array (
                    'id' => 2,
                    'type' => 'sold',
                    'description'=> ''
                ),
            3 =>
                array (
                    'id' => 3,
                    'type' => 'expired',
                    'description'=> ''
                ),
            4 =>
                array (
                    'id' => 4,
                    'type' => 'terminated',
                    'description'=> ''
                ),
        ));
    }
}
