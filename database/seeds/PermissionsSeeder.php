<?php

use Illuminate\Database\Seeder;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$all_permission = new App\Permission();
		$all_permission->name = "all permission";
		$all_permission->slug = "all";
		$all_permission->description = "";
		$all_permission->save();

		$parcial = new App\Permission();
		$parcial->name = "parcial permission";
		$parcial->slug = "parcial";
		$parcial->description = "";
		$parcial->save();

		$restricted = new App\Permission();
		$restricted->name = "restricted access";
		$restricted->slug = "restricted";
		$restricted->description = "";
		$restricted->save();

    }
}
