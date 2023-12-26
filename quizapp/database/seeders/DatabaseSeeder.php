<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Post::create([
                'title' => $faker->sentence(),
                'content' => $faker->paragraph(),
            ]);
        }
    }
}
