<?php

use Illuminate\Database\Seeder;
use App\Hotel;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++){
            Hotel::create([
                'hotel_name' =>'marco polo',
                'hotel_desc' => 'good',
                'hotel_starting_price' => '10000',
                'hotel_location' => 'Davao',
                'hotel_policy' => 'no smoking'
            ]);
        }
    }
}
