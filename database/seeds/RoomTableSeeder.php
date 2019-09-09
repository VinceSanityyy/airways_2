<?php

use Illuminate\Database\Seeder;
use App\Room;
class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<2; $i++){
            Room::create([
                'hotel_id' =>1,
                'room_no' => 1,
                'room_name' => 'be221',
                'room_desc' => 'good',
                'room_capacity' => '10',
                'room_price' => 1000,
                'bed_desc' => 'double size',
                'room_size_desc' => '100m',
            ]);
        }
    }
}
