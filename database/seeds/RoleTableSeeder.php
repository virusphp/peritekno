<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
		$admin->name = "admin";
		$admin->display_name = "Administrator";
        $admin->save();
        
        $admin = new Role();
		$admin->name = "member";
		$admin->display_name = "Member";
		$admin->save();
    }
}
