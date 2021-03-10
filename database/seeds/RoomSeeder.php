<?php

use App\Room;
use Illuminate\Database\Seeder;

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
        $i = 0;
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
