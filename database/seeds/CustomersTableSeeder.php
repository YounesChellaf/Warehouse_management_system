<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = Carbon::now();

        $array[0] = ['customer_name'=>'interne','customer_email'=>'interne@sonatrach.dz','customer_address'=>'locale','customer_contact1'=>'0','customer_contact2'=>'0','created_at'=>$created_at];

        $array[1] = ['customer_name'=>'SPA Gasinvest','customer_email'=>'contact@gasinvest.com','customer_address'=>'EU','customer_contact1'=>'9654659875','customer_contact2'=>'9654659875','created_at'=>$created_at];

        $array[2] = ['customer_name'=>'SARL EnergieRevo','customer_email'=>'contact@enerevo.com','customer_address'=>'Cheraga, Alger','customer_contact1'=>'9654659875','customer_contact2'=>'9654659875','created_at'=>$created_at];
        
        $array[2] = ['customer_name'=>'GOExperts','customer_email'=>'contact@goexperts.com','customer_address'=>'US','customer_contact1'=>'9654659875','customer_contact2'=>'9654659875','created_at'=>$created_at];

        \App\Models\CustomerDetail::truncate();

        \App\Models\CustomerDetail::insert($array);
    }


}
