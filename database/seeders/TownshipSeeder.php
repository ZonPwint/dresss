<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $townships = array('Hlaing', 'Insein', 'Tamwe', 'Mayangone', 'Thaketa', 'Thingangyun', 'Yankin', 'Pazundaung', 'Ahlone','Bahan','Dagon', 'Kamaryut', 'Kyauktada', 'Kyeemyindaing', 'Lanmadaw', 'Latha', 'Pabedan', 'Sanchaung', 'Seikkan', 'Hlaingtharya', 'Hlegu', 'Hmawbi', 'Htantabin', 'Mingaladon', 'Shwepyithar', 'Taikkyi', 'Botahtaung', 'Dagon Myothit (East)', 'Dagon Myothit (North)', 'Dagon Myothit (Seikkan)', 'Dagon Myothit (South)', 'Dawbon', 'Mingalartaungnyunt', 'North Okkalapa', 'South Okkalapa', 'Thanlyin', 'သန်လျင်', 'Thongwa', 'Twantay', 'Seikgyikanaungto', 'Kyauktan', 'Kungyangon', 'Kayan', 'Kawhmu','Dala','Cocokyun','Mandalay','Sagaing','NapyiDaw','Shwebo','PyinOoLwin','Bago','Mawlamyein');
        $now=Carbon::now();
        foreach ($townships as $township){
        	DB::table('townships')->insert([
             'name'=>$township,
             'created_at'=>$now,
             'updated_at'=>$now,
        	]);
        }
    }
}
