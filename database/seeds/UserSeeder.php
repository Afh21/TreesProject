<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->lastname = "default";
        $user->identity = "1.111.111.111";
        $user->genre = "m";
        $user->date="1992-01-01";
        $user->age = "26";
        $user->phone = "00000000";
        $user->email = "admin@coreducacion.com";
        $user->password = Bcrypt("123456789");
        $user->define = 'yes';
        $user->save();

        $rol = Role::find(1);
        $user->roles()->attach($rol);
        

         
    }
}
