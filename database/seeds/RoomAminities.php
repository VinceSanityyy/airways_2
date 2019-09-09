<?php

use Illuminate\Database\Seeder;

class RoomAminities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++){
            RoomAminities::create([
                'aminity_id' =>1,
                'room_id' => 1,
                'status' => 'Not',

            ]);
        }
    }
}
