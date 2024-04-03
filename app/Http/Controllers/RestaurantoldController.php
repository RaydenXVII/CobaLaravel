<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('restaurant', ['restaurants' => Restaurant::getAll()]);
    }

    public static function show($endpoint)
    {
        $restaurants = Restaurant::find($endpoint);
        return view('restaurant.detail', ['restaurant' => $restaurants]);
    }
}
