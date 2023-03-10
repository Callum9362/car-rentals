<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Car::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Rental::factory(10)->create();
        \App\Models\Payment::factory(5)->create();
    }
}
