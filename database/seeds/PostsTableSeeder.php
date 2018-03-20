<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
	  $date = Carbon::create(2018, 3, 7, 9);

      for ($i = 1; $i <= 10; $i++)
      {
          $image = "Post_Image_" . rand(1, 5) . ".jpg";
		  $date->addDays(1);
		  $publishedDate = clone($date);
		  $createDate = clone($date);

          $posts[] = [
              'author_id'    => rand(1, 3),
			  'category_id'  => rand(1, 2),
              'title'        => $faker->sentence(rand(8, 12)),
              'body'         => $faker->paragraphs(rand(10, 15), true),
              'slug'         => $faker->slug(),
			  'image'        => rand(0, 1) == 1 ? $image : NULL,
			  'created_at' 	 => $createDate,
			  'updated_at'   => $createDate,
			  'published_at' => $i < 5 ? $publishedDate : ( rand(0, 1) == 0 ? NULL : $publishedDate->addDays(4) ),
			  'view_count'   => rand(1, 10) * 10
            ];
      }

      DB::table('posts')->insert($posts);
    }
}
