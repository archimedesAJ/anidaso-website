<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/our-team', function(){
    return view('team');
})->name('our-team');

Route::get('/our-core-values', function(){
    return view('core_values');
})->name('our-core-values');

Route::get('/about-us', function(){
    return view('about_us');
})->name('about-us');

Route::get('/products', function(){
    return view('product');
})->name('products');

Route::get('/portfolio', function(){
    return view('portfolio');
})->name('portfolio');

Route::get('/contact-us', function(){
    return view('contact');
})->name('contact-us');


Route::get('/our-blog', function(){
    return view('blog');
})->name('our-blog');


Route::get('/our-shop', function(){
    return view('shop.index');
})->name('our-shop');

