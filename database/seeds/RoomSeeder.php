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
            ['S2', '101', '1'],
            ['S2', '102', '1'],
            ['S2', '104', '1'],
            ['S2', '106', '1'],
            ['S2', '107', '1'],
            ['S2', '201', '1'],
            ['S2', '207', '1'],
            ['S2', '208', '1'],
            ['S2', '210', '1'],
            ['S2', '212', '1'],
            ['S2', '305', '1'],
            ['S2', '307', '1'],
            ['S2', '308', '1'],
            ['S2', '310', '1'],
            ['S2', '406', '1'],
            ['S2', '408', '1'],
            ['S2', '410', '1'],
            ['S2', '412', '1'],
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
