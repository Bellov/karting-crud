<?php

use Illuminate\Database\Seeder;
use App\Kartings;

class KartingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karting = new Kartings();
        $karting->name="RX7";
        $karting->save();

        $karting = new Kartings();
        $karting->name="RX8";
        $karting->save();

        $karting = new Kartings();
        $karting->name="RX250";
        $karting->save();




    }
}
