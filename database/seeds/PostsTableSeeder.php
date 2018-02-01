<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->truncate();

      // generate 10 dummy posts data
      $posts = [];
      $faker = Faker\Factory::create();

      for ($i = 1; $i <= 10; $i++)
      {
          $image = "post_" . rand(1, 5) . ".jpeg";

          $posts[] = [
              'author_id'    => rand(1, 3),
              'title'        => $faker->sentence(rand(8, 12)),
              'body'         => $faker->paragraphs(rand(10, 15), true),
              'slug'         => $faker->slug(),
              'image'        => rand(0, 1) == 1 ? $image : NULL,
            ];
      }

      DB::table('posts')->insert($posts);
    }
}
