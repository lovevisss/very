<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Device;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('zh_CN');
        Device::truncate();

        $devices = [
            ['交换机','WS-C2960S-48TS-S', 'SYJS_0831', '28', '10.1.9.36','10.4.4.1','S2','210'],
            ['交换机','WS-C2960S-48TS-S', 'SYJS_0831', '27', '10.1.9.37','10.4.4.1'],
            ['交换机','WS-C2960S-48TS-S', 'SYJS_0831', '27', '10.1.9.38','10.4.4.1'],
            ['交换机','WS-C2960S-48TS-S', 'SYJS_0831', '14', '10.1.9.39','10.4.4.1'],
            ['交换机','WS-C2960S-24TS-S', 'SYJS_0831', '13', '10.1.9.2','10.4.4.1'],
            ['交换机','WS-C2960S-48TS-S', 'SYJS_0831', '12', '10.1.9.3','10.4.4.1'],
            ['交换机','WS-C2960S-48TS-S', 'SYJS_0831', '11', '10.1.9.4','10.4.4.1'],
            ['交换机','WS-C2960S-48TS-S', 'SYJS_0831', '10', '10.1.9.5','10.4.4.1'],
        ];

        foreach ($devices as $device)
        {
            Device::create(
                [
                    'room_id' => 1,
                    'model' => $device[1],
                    'type' => $device[0],
                    'password' => $device[2],
                    'vlan' => $device[3],
                    'management_ip' => $device[4],
                    'ip' => $device[5]
                ]
            );

        }

    }
}
