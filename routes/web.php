<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {

//     $data = ["hello" => "World"];

//     return $data;
// });

Route::middleware(['cors'])->group(function () {
    Route::get('/', function () {

        $data = [
            "_id" => "1",
            "company" => "Hotshi",
            "Product" => "Social network"
        ];

        return $data;
    });
});





// Route::middleware(['cors'])->group(function () {
//     Route::get('/', function () {

//         $data = ["hello" => "World"];

//         return $data;
//     });
// });
