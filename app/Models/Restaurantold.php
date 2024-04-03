<?php

namespace App\Models;


class Restaurant
{
    private static $restaurant_list = [
        [
            'name' => 'Ayam Geprek',
            'endpoint' => 'restaurantAG',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam possimus natus, dicta consequatur temporibus quis enim placeat repellendus ut rem!",
            'price' => '15000'
        ]
        ,

        [
            'name' => 'Bebek Goreng',
            'endpoint' => 'restaurantBG',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam possimus natus, dicta consequatur temporibus quis enim placeat repellendus ut rem!',
            'price' => '20000'
        ]
    ];

    public static function getAll()
    {
        return collect(self::$restaurant_list);
    }

    public static function find($endpoint)
    {
        $restaurants = self::getAll();
        return $restaurants->firstWhere('endpoint', $endpoint);
    }
}
