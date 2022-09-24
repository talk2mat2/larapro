<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CarsController;


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
    return view('welcome');
});

Route::get("/users",function(){
    return response()->json([
        "martins"=>"37"
    ]);
});

Route::get("/home",function(){
    return view("home");
});

// Route::get("/products",[ProductsController::class,'index']);
Route::get("/products","App\Http\Controllers\ProductsController@index");
Route::get("/products/{id}",[ProductsController::class,'details']);

Route::get("/posts",[PostController::class,"index"]);
Route::resource('cars', CarsController::class);("/cars");
// Route::resource("/cars",CarsController::class);
