<?php

use Illuminate\Database\Seeder;
use App\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crud = new Permission();
		$crud->name = "crud";
		$crud->save();
    }
}
