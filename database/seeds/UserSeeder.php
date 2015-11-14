<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder{

    public function run(){
        DB::table('users')->delete();

        $adminRole = Role::whereName('administrator')->first();
        $userRole = Role::whereName('user')->first();

        $user = User::create(array(
            'first_name'    => 'Fromz',
            'last_name'     => 'PK',
            'email'         => 'pkfrom@iinbrand.com',
            'password'      => Hash::make('faster')
        ));
        $user->assignRole($adminRole);

        $user = User::create(array(
            'first_name'    => 'Jane',
            'last_name'     => 'Doe',
            'email'         => 'user@iinbrand.com',
            'password'      => Hash::make('userpass')
        ));
        $user->assignRole($userRole);
    }
}