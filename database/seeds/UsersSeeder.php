<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
        
        $admin = new User();
        $admin->name = 'Dunia Aksesoris';
        $admin->email = 'duniaaksesoris@gmail.com';
        $admin->password = bcrypt('aksesoris');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
