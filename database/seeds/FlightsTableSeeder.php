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
                'alias' => Str::random(10),
                'flight_country_from' => 'Cebu',
                'flight_country_to' => 'Tacloban',
                'plane_id' => rand(16,20),
                'price' => rand(5000, 2000),
                'status' => rand(1,0)
            ]);
        }
    }
}
