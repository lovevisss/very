<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            ['赵家荣','实验室管理', '20101009'],
            ['钟鹤','教室管理', '20130101'],
            ['吴玉龙', '图书馆管理','20101201']
        ];
        foreach($users as $user)
        {
            DB::table('users')->insert([
                'name' => $user[0],
                'occupation' => $user[1],
                'email' => $user[2].'@zufedfc.edu.cn',
                'password' => '123456',
            ]);
        }
    }
}
