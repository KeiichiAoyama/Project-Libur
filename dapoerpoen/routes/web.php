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
    $int = 0;
    return view('home',  ['int' => $int]);
})->name('home');

Route::get('/product', function () {
    $int = 1;
    return view('products',  ['int' => $int]);
})->name('product');

Route::get('/about', function () {
    $int = 2;
    return view('about',  ['int' => $int]);
})->name('about');
