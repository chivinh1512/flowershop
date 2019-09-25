<?php

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

Route::get('/','IndexController@index');

Route::get('/productdetail','ProductController@getproductdetail');

Route::get('/shoppingcart','ShoppingCartController@showcart');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/{id}','ProductController@getproductincate')->name('user.products');