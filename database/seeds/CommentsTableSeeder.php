<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        Comment::truncate();
        $list = ['Gus' => 'Businessman', 'Walter' => 'Chemist', 'Saul' => 'Lawyer'];
        foreach(range(1,10) as $index)
        {
            DB::table('comments')->insert([
                'body' => $faker->text,
                'article_id' => rand(1,3),
            ]);
        }
    }
}
