<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->delete();

        $role_admin = new Role();
        $role_admin->id = 0;
        $role_admin->name = 'Super-admin';
        $role_admin->description = 'A super admin';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->id = 1;
        $role_admin->name = 'Admin';
        $role_admin->description = 'An Admin';
        $role_admin->save();

        $role_author = new Role();
        $role_author->id = 2;
        $role_author->name = 'Employee';
        $role_author->description = 'A Employee';
        $role_author->save();

        $role_user = new Role();
        $role_user->id = 3;
        $role_user->name = 'Rental';
        $role_user->description = 'A normal Rental';
        $role_user->save();
        /*
                $role_user = new Role();
                $role_user->id = 4;
                $role_user->name = 'Blog-user';
                $role_user->description = 'A Blog User';
                $role_user->save();

                $role_user = new Role();
                $role_user->id = 5;
                $role_user->name = 'Expert';
                $role_user->description = 'A normal User';
                $role_user->save();*/
    }
}