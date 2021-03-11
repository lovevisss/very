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
        $faker = Faker::create('zh_CN');
        Room::truncate();
        $dic = [
            ['WS-C2960S-48TS-S', '101', 'S2', '10.1.9.36'],
            ['WS-C2960S-48TS-S', '101', 'S2', '10.1.9.37'],
            ['WS-C2960S-48TS-S', '101', 'S2', '10.1.9.38'],
            ['WS-C2960S-48TS-S', '101', 'S2', '10.1.9.39'],
            ['WS-C2960S-24TS-S', '102', 'S2', '10.1.9.2'],
            ['WS-C2960S-48TS-S', '102', 'S2', '10.1.9.3'],
            ['WS-C2960S-48TS-S', '104', 'S2', '10.1.9.4'],
            ['WS-C2960S-48TS-S', '104', 'S2', '10.1.9.5'],
            ];
        foreach (range(1,10) as $index)
        {
            Room::create(
                [
                    'name' => $faker->company,
                    'device_num' => 3,
                    'owner_id' => 2
                ]
            );

        }
    }
}
