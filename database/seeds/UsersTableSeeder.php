<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$array = ['name'=>'Administrateur','email'=>'admin@admin.admin','password'=>bcrypt('admin')];
    	
        \App\Models\User::truncate();
        \App\Models\User::create($array);
    }
}
