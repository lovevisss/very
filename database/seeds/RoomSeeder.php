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
            ['S1', '101', '1'],
            ['S1', '102', '1'],
            ['S1', '104', '1'],
            ['S1', '106', '1'],
            ['S1', '208', '1'],
            ['S1', '210', '1'],
            ['S1', '212', '1'],
            ['S1', '305', '1'],
            ['S1', '307', '1'],
            ['S1', '201', '1'],
            ['S1', '308', '1'],

        ];
        foreach ($rooms as $room)
        {
            Room::create(
                [
                    'name' => $room[1],
                    'building' => $room[0],
                    'owner_id' => $room[2],
                ]
            );

        }
    }
}
