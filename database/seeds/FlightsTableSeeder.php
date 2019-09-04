<?php

use Illuminate\Database\Seeder;
use App\Flights;
use Carbon\Carbon;


class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++){
            Flights::create([
                'flight_schedule' => Carbon::parse('2019-09-05'),
                'flight_arrival' =>  Carbon::parse('2019-09-06'),
                'terminal' => 'Davao',
                'flight_country_from' => 'Davao',
                'flight_country_to' => 'Manila',
                'plane_id' => rand(1,15),
                'price' => rand(5000, 2000),
                'status' => rand(1,0)
            ]);
        }
    }
}
