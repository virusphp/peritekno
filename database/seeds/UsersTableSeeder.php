<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
          DB::statement('SET FOREIGN_KEY_CHECKS=0');
          DB::table('users')->truncate();

		  $faker = Factory::create();

          DB::table('users')->insert([
          [
              'name' => "SuperAdmin",
              'slug' => "superadmin",
              'email' => "superadmin@test.com",
              'password' => bcrypt('secret'),
			  'bio' => $faker->text(rand(250, 300))
          ],
          [
              'name' => "Admin",
              'slug' => "admin",
              'email' => "admin@test.com",
              'password' => bcrypt('secret'),
			  'bio' => $faker->text(rand(250, 300))
          ],
          [
              'name' => "users",
              'slug' => "users",
              'email' => "users@test.com",
              'password' => bcrypt('secret'),
			  'bio' => $faker->text(rand(250, 300))
          ],
        ]);
    }
}
