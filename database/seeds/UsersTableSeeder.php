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
        $list = ['Gus' => 'Businessman', 'Walter' => 'Chemist', 'Saul' => 'Lawyer'];
        foreach($list as $key=>$value)
        {
            DB::table('users')->insert([
                'name' => $key,
                'occupation' => $value,
                'email' => $key.'test@qq.com',
                'password' => '123456',
            ]);
        }
    }
}
