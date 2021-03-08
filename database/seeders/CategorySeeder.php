<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array('Chin', 'Karen', 'Buma', 'Kachin', 'Mon', 'Shan','Rakhine'); 
        $now = Carbon::now();
        foreach ( $categories as  $category){ 
        DB::table('categories')->insert([ 
        	'name'=> $category, 
        	'created_at' => $now,
        	'updated_at' => $now ]); 
    
    }
}
}