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

Route::get('/', 'MainController@index')->name('main.index');

Auth::routes();

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/wishlist/{wishlist}', 'WishlistController@show')->name('wishlist.show');
Route::post('/wishlist', 'WishlistController@store')->name('wishlist.store');

Route::get('/profiles/{profile}', 'ProfileController@show')->name('profile.show');
Route::get('/profiles/{profile}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profiles/{profile}', 'ProfileController@update')->name('profile.update');

Route::get('/cart/create', 'CartController@create')->name('cart.create');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('/checkout/create', 'CheckoutController@create')->name('checkout.create');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout/complete', 'CheckoutController@complete')->name('checkout.complete');

Route::post('/review', 'ReviewController@store')->name('review.store');

Route::get('/ajax', 'AjaxController@index')->name('ajax.index');
Route::get('/ajax/search', 'AjaxController@search')->name('ajax.search');
Route::get('/ajaxproducts', 'ShopController@ajax');

