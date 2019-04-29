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
        $role_registra = new Role();
        $role_registra->name = 'Registrar';
        $role_registra->description = 'A This is a Registrar User';
        $role_registra->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'This is an Admin';
        $role_admin->save();
    }
}
