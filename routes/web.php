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

Route::get('/discount', function () {
    return view('discount');
});

Route::post('/discount', function (\Illuminate\Http\Request $request) {
    $productDescription = +$request->input('ProductDescription');
    $listPrice = +$request->input('ListPrice');
    $discountPercent = +$request->input('DiscountPercent');
    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice * $discountAmount;

    return view('show_discount_amout', compact(['discountPrice', 'discountAmount', 'productDescription', 'listPrice', 'discountPercent']));
});

