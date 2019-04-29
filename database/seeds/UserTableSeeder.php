<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_registrar  = Role::where('name', 'Registrar')->first();


        $admin = new User();
        $admin->name = 'Lynn Rotich';
        $admin->email = 'lynn@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $registrar = new User();
        $registrar->name = 'Dennis Noname';
        $registrar->email = 'dennis@example.com';
        $registrar->password = bcrypt('secret');
        $registrar->save();
        $registrar->roles()->attach($role_registrar);
    }
}
