<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now();

         DB::table('dresses')->insert([
            'name' => 'Kachin Yoerar Cin',
            'title' => 'Kachin Yoerar Cin',
            'photo' => '/storage/dresscover/kachin.jpg',
            'price' => '35000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'	=>4,    
            'created_at' => $now,
            'updated_at' => $now,
        ]);
         DB::table('dresses')->insert([
            'name' => 'Buma Yoerar Cin',
            'title' => 'Buma Yoerar Cin',
            'photo' => '/storage/dresscover/mm.jpg',
            'price' => '25000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'	=>3,    
            'created_at' => $now,
            'updated_at' => $now,
        ]);
         DB::table('dresses')->insert([
            'name' => 'InnLay Yoerar Cin',
            'title' => 'InnLay Yoerar Cin',
            'photo' => '/storage/dresscover/innlay.jpg',
            'price' => '45000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'   =>13,    
            'created_at' => $now,
            'updated_at' => $now,
        ]); 
         DB::table('dresses')->insert([
            'name' => 'Karen Yoerar Cin',
            'title' => 'Karen Yoerar Cin',
            'photo' => '/storage/dresscover/karen.jpg',
            'price' => '35000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'   =>2,    
            'created_at' => $now,
            'updated_at' => $now,
        ]);
         DB::table('dresses')->insert([
            'name' => 'Mon Yoerar Cin',
            'title' => 'Mon Yoerar Cin',
            'photo' => '/storage/dresscover/mon4.jpg',
            'price' => '35000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'   =>5,    
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('dresses')->insert([
            'name' => 'Shan Yoerar Cin',
            'title' => 'Shan Yoerar Cin',
            'photo' => '/storage/dresscover/shan6.jpg',
            'price' => '35000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'   =>6,    
            'created_at' => $now,
            'updated_at' => $now,
        ]);
         DB::table('dresses')->insert([
            'name' => 'Buma Yoerar Cin',
            'title' => 'Buma Yoerar Cin',
            'photo' => '/storage/dresscover/mm2.jpg',
            'price' => '35000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'   =>3,    
            'created_at' => $now,
            'updated_at' => $now,
        ]);
         DB::table('dresses')->insert([
            'name' => 'Buma Yoerar Cin',
            'title' => 'Buma Yoerar Cin',
            'photo' => '/storage/dresscover/mm6.jpg',
            'price' => '35000',
            'discount' => '', 
            'description' => 'Tradtional Dress',       
   
            'category_id'   =>3,    
            'created_at' => $now,
            'updated_at' => $now,
        ]);

       
    }
}
