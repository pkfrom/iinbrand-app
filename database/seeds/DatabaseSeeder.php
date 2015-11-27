<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         //$this->call('RoleSeeder');
         //$this->call('UserSeeder');
         $this->call('TagTableSeeder');
         $this->call('PostTableSeeder');

       // $this->call('LaravelAcl\Database\PermissionSeeder');
       // $this->call('LaravelAcl\Database\GroupsSeeder');
       // $this->call('LaravelAcl\Database\UserSeeder');

        Model::reguard();
    }
}
