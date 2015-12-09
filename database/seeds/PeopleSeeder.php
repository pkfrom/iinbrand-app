<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::truncate();

        factory(Person::class, 50)->create();
    }
}
