<?php

use Illuminate\Database\Seeder;
use App\TempFlight;
use Carbon\Carbon;
class TempFlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++){
            TempFlight::create([
                'paymentID'  =>1,
                'customerID'  =>rand(1,10),
                'planeID'  =>rand(1,10),
                'reservationDate'  =>Carbon::parse('2019-09-06'),
                'PassengerNo'  =>rand(1,10),
                'DepartDate'  =>Carbon::parse('2019-09-10'),
                'DepartLoc'  =>"Davao",
                'ReturnLoc'  =>"Manila",
                'ReturnDate'  =>Carbon::parse('2019-09-11'),
                'price' => rand(5000, 2000),
            ]);
        }
    }
}
