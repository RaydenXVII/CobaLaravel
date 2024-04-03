<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('restaurant', ['restaurants' => Restaurant::All()]);
    }

    public function showByName($name)
    {
        // Cari restoran berdasarkan nama
        $restaurant = Restaurant::where('name', $name)->first();

        return view('restaurant.detail', ['restaurant' => $restaurant]);
    }

    public function create(){
        return view('restaurant.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' =>'required',
            'address' =>'required',
            'city' =>'required',
            'descriptions' =>'required',
        ]);

        Restaurant::create($validatedData);
        return redirect('/restaurant');
    }

    public function edit($restaurant){
        // dd($restaurant);
        $data = Restaurant::find($restaurant);

        return view('restaurant.edit', [
            'restaurant' => $data
        ]);
    }

    public function update(Request $request, $restaurant){

        $data = Restaurant::find($restaurant);

        $validatedData = $request->validate([
            'name' =>'required',
            'address' =>'required',
            'city' =>'required',
            'descriptions' =>'required',
        ]);


        $data->update($validatedData);
        return redirect('/restaurant');
    }

    public function destroy($restaurant){

        Restaurant::destroy($restaurant);
        return redirect('/restaurant');
    }
}
