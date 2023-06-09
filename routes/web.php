<?php

use Illuminate\Support\Facades\Route;

use App\Models\Product;

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
    return view('index');
});

Route::get('/menu', function() {
    $products = Product::all();
    return view('menu')->with('products', $products);
});

Route::get('/catering', function() {
    return view('catering');
});

Route::get('/contact', function() {
    return view('contact');
});