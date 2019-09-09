<?php

use Illuminate\Database\Seeder;
use App\HotelAminities;
class HotelAminitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<2; $i++){
            HotelAminities::create([
                'hotel_id' =>1,
                'aminity_id' => 1,
                'status' => 'available for consume',

            ]);
        }
    }
}
