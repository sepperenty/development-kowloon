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

Route::get('/', "publicController@home");

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/makeArticles', 'HomeController@makeArticles');

Route::get('/sort/{tag1}/{tag2}/{tag3}/{tag4}/{tag5}/{minPrice}/{maxPrice}/{sort}', 'ApiController@sort');

Route::get("/about", "publicController@about");

Route::get("/productView", "publicController@productView");

Route::get("/productDetail", "publicController@productDetail");