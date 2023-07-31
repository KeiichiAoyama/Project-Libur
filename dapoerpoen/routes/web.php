<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
    $arr = [];
    $id;

    for($i = 0; $i < 3; $i++){
        $num = round(rand(1,63));
        if($i != 0){
            while($num == $id){
                $num = round(rand(1,63));
            }
        }
        $id = $num;
        $arr[$i] = DB::table('food')->where('id', $id)->first();
    }

    session::put('language', "EN");
    session::put('arr', $arr);
    return redirect()->route('home');
})->name('default');

Route::get('/home', function () {
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

Route::post('/language', 'App\Http\Controllers\Controller@language')->name('language');
