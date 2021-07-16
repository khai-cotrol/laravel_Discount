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

Route::get('/Discount', function () {
    return view('discount');
});
Route::post('/Discount',function (Illuminate\Http\Request $request ){
    $price =$request->price;
    $discount=$request->discount;
    $result = $price*$discount*0.01;
    return view('Discount_Calculator',compact('result','price','discount'));
});
