<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = Carbon::now();

        $array[0] = ['supplier_name'=>'SARL ALIMO','supplier_email'=>'contact@alimo.com','supplier_address'=>'Ouergla','supplier_contact1'=>'9654659875','supplier_contact2'=>'9654659875','due'=>265,'created_at'=>$created_at];

        $array[1] = ['supplier_name'=>'SARL Ceramica','supplier_email'=>'contact@ceramica.com','supplier_address'=>'Eulma, Setif','supplier_contact1'=>'9654659875','supplier_contact2'=>'9654659875','due'=>698,'created_at'=>$created_at];

        $array[2] = ['supplier_name'=>'EURL INO','supplier_email'=>'contact@ino.com','supplier_address'=>'Ouergla','supplier_contact1'=>'9654659875','supplier_contact2'=>'9654659875','due'=>985,'created_at'=>$created_at];
    	
        \App\Models\SupplierDetail::truncate();

        \App\Models\SupplierDetail::insert($array);
    }


}
