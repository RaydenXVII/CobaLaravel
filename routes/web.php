<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;
use App\Models\Restaurant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('rumah');
});

Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant');
Route::get('/restaurant/{name}', [RestaurantController::class, 'showByName'])->name('restaurant.detail');

//Route Create
Route::get('/addRestaurant', [RestaurantController::class, 'create'])->name('restaurant.create');
Route::post('/addRestaurant', [RestaurantController::class,'store'])->name('restaurant.store');

//Route Update
Route::get('/editRestaurant/{id}', [RestaurantController::class, 'edit']);
Route::put('/editRestaurant/{id}/update', [RestaurantController::class, 'update']);

//route Delete
Route::delete('/deleteRestaurant/{id}', [RestaurantController::class, 'destroy']);

// Route::get('/about', function () {
//     return view('about', [
//         'nama' => 'Randy Deniz Manzarasi',
//         'nim' => '1201220445',
//         'Prodi' => 'Rekayasa Perangkat Lunak'
//     ]);
// });

// Route::get('/user', function () {
//     return view('user', [
//         'username' => 'RandyDM',
//         'email' => 'randydm@gmail.com',
//     ]);
// });

