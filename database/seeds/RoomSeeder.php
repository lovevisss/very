<?php

use App\Room;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::truncate();

        $rooms = [
            ['S1', '101', 4, '2'],
            ['S1', '102', 2, '2'],
            ['S1', '104', 2, '2'],
            ['S1', '106', 2, '2'],
            ['S1', '208', 2, '2'],
            ['S1', '210', 2, '2'],
            ['S1', '212', 2, '2'],
            ['S1', '305', 3, '2'],
            ['S1', '307', 3, '2'],
            ['S1', '201', 4, '2'],
            ['S1', '308', 4, '2'],

        ];
        foreach ($rooms as $room)
        {
            Room::create(
                [
                    'name' => $room[1],
                    'building' => $room[0],
                    'device_num' => $room[2],
                    'owner_id' => $room[3]
                ]
            );

        }
    }
}
