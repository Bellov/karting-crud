<?php

use Illuminate\Database\Seeder;


use App\Karting;

class KartingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$karting = new Karting();
    	$karting->name ="RX7";
    	$karting->save();

    	$karting = new Karting();
    	$karting->name="RX8";
    	$karting->save();

    	$karting = new Karting();
    	$karting->name ="RX250";
    	$karting->save();	





    }
}
