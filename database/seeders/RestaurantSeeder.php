<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'name' => 'Randy Restaurant',
            'address' => 'San Francisco 911',
            'city' => 'San Francisco',
            'descriptions' => 'Makanan Enak dan Bergizi'
        ]);
    }
}
