<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *  // \App\Models\User::factory(10)->create();
     *
     * @return void
     */
    public function run()
    {
        Restaurant::factory(10)->create();
    }
}
