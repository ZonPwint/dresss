<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker;
class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $fees=array(2000,2500,3000,4000,5000);
        $faker=\Faker\Factory::create();
        $now=Carbon::now();

        for($i=1;$i<=53;$i++){
        	DB::table('shippings')->insert([
              'fee'=>$fees[$faker->numberBetween(0,4)],
               'township_id'=>$i,
               'created_at'=>$now,
               'updated_at'=>$now,
           ]);
        }
    }
}
