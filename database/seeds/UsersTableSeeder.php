<?php

use Illuminate\Database\Seeder;

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
          DB::table('users')->insert([
          [
              'name' => "SuperAdmin",
              'slug' => "superadmin",
              'email' => "superadmin@test.com",
              'password' => bcrypt('secret')
          ],
          [
              'name' => "Admin",
              'slug' => "admin",
              'email' => "admin@test.com",
              'password' => bcrypt('secret')
          ],
          [
              'name' => "users",
              'slug' => "users",
              'email' => "users@test.com",
              'password' => bcrypt('secret')
          ],
        ]);
    }
}
