<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\Role();
        $admin->name = "administrator";
        $admin->slug = "administrator";
        $admin->description = "";
        $admin->save();

        $geo = new App\Role();
        $geo->name = "geolocator";
        $geo->slug = "geolocator";
        $geo->description = "";
        $geo->save();

        $guest = new App\Role();
        $guest->name = "guest";
        $guest->slug = "guest";
        $guest->description = "";
        $guest->save();
    }
}
