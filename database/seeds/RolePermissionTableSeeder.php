<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::whereName('admin')->first();
        $member = Role::whereName('member')->first();
        
        $admin->addPermission('crud');
    }
}
