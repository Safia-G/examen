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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/products', 'ProductsController@index');
Route::get('/addProduct', 'ProductsController@addProduct');
Route::post('/insert/product', 'ProductsController@insertProduct');
Route::post('/delete/product', 'ProductsController@deleteProduct');
Route::post('/update/product', 'ProductsController@updateProduct');
Route::post('/update/product/action', 'ProductsController@updateProductAction');



Route::get('/contact', 'ContactController@index');



Auth::routes();
