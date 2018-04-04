<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permission = Permission::find(1);
        $admin = Role::find(1);
        $admin->permissions()->attach($admin_permission);

        $geo_permission = Permission::find(2);
        $geo = Role::find(2);
        $geo->permissions()->attach($geo_permission);

        $guest_permission = Permission::find(3);
        $guest = Role::find(3);
        $guest->permissions()->attach($guest_permission);



    }
}
