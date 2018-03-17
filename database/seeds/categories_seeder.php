<?php

use Illuminate\Database\Seeder;

class categories_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::statement('SET FOREIGN_KEY_CHECKS=0');
          DB::table('categories')->truncate();
          DB::table('categories')->insert([
          [
              'name' => "Berita",
              'slug' => "berita"
          ],
          [
              'name' => "Olahraga",
              'slug' => "olahraga"
          ],
          [
              'name' => "Teknologi",
              'slug' => "teknologi"
          ],
        ]);
    }
}
