<?php

use Illuminate\Database\Seeder;

class UnitOfMeasuresMasterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('unit_of_measures_master')->delete();
        
        \DB::table('unit_of_measures_master')->insert(array (
            0 => 
            array (
                'uom_id' => 1,
                'name' => 'Millimetre',
                'symbol' => 'mm',
                'measure_id' => '1',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            1 => 
            array (
                'uom_id' => 2,
                'name' => 'Centimetre',
                'symbol' => 'cm',
                'measure_id' => '1',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            2 => 
            array (
                'uom_id' => 3,
                'name' => 'Pouce',
                'symbol' => 'in',
                'measure_id' => '1',
                'created_at' => '2017-02-14 14:33:24',
                
                'status' => 1,
            ),
            3 => 
            array (
                'uom_id' => 4,
                'name' => 'Metre',
                'symbol' => 'm',
                'measure_id' => '1',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            4 => 
            array (
                'uom_id' => 5,
                'name' => 'Millimetre',
                'symbol' => 'mm',
                'measure_id' => '2',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            5 => 
            array (
                'uom_id' => 6,
                'name' => 'Centimetre',
                'symbol' => 'cm',
                'measure_id' => '2',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            6 => 
            array (
                'uom_id' => 7,
                'name' => 'Pouce',
                'symbol' => 'in',
                'measure_id' => '2',
                'created_at' => '2017-02-14 14:33:24',
                
                'status' => 1,
            ),
            7 => 
            array (
                'uom_id' => 8,
                'name' => 'Metre',
                'symbol' => 'm',
                'measure_id' => '2',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            8 => 
            array (
                'uom_id' => 9,
                'name' => 'Millimetre',
                'symbol' => 'mm',
                'measure_id' => '3',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            9 => 
            array (
                'uom_id' => 10,
                'name' => 'Centimetre',
                'symbol' => 'cm',
                'measure_id' => '3',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            10 => 
            array (
                'uom_id' => 11,
                'name' => 'Pouce',
                'symbol' => 'in',
                'measure_id' => '3',
                'created_at' => '2017-02-14 14:33:24',
                
                'status' => 1,
            ),
            11 => 
            array (
                'uom_id' => 12,
                'name' => 'Metre',
                'symbol' => 'm',
                'measure_id' => '3',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            12 => 
            array (
                'uom_id' => 13,
                'name' => 'Jauge',
                'symbol' => 'ga.',
                'measure_id' => '4',
                'created_at' => '2017-02-14 14:29:04',
                
                'status' => 1,
            ),
            13 => 
            array (
                'uom_id' => 14,
                'name' => 'Millimetre',
                'symbol' => 'mm',
                'measure_id' => '4',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            14 => 
            array (
                'uom_id' => 15,
                'name' => 'Grame',
                'symbol' => 'g',
                'measure_id' => '5',
                'created_at' => '2017-02-14 14:30:05',
                
                'status' => 1,
            ),
            15 => 
            array (
                'uom_id' => 16,
                'name' => 'Killograme',
                'symbol' => 'kg',
                'measure_id' => '5',
                'created_at' => '2017-02-14 14:33:24',
                
                'status' => 1,
            ),
            16 => 
            array (
                'uom_id' => 17,
                'name' => 'Livres',
                'symbol' => 'lbs',
                'measure_id' => '5',
                'created_at' => '2017-02-14 14:30:40',
                
                'status' => 1,
            ),
            17 => 
            array (
                'uom_id' => 18,
                'name' => 'Millilitre',
                'symbol' => 'ml',
                'measure_id' => '6',
                'created_at' => '2017-02-14 14:32:46',
                
                'status' => 1,
            ),
            18 => 
            array (
                'uom_id' => 19,
                'name' => 'Litre',
                'symbol' => 'l',
                'measure_id' => '6',
                'created_at' => '2017-02-14 14:33:24',
                
                'status' => 1,
            ),
        ));
        
        
    }
}