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

Route::get('/', 'WelcomeController@index');
Route::get('/product/{title}-{id}', 'ProductController@getProduct')->name('product.show');
Route::get('/category/{title}-{id}/product', 'CategoryProductController@getCategoryProduct')->name('category.show');

Auth::routes(['reset'=>false,'register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
