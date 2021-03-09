<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('zh_CN');
        Article::truncate();
        $i = 0;
        foreach (range(1,10) as $index)
        {
            Article::create(
            [
                'title' => $faker->company,
                'body' => $faker->text
            ]
            );

        }

    }
}
