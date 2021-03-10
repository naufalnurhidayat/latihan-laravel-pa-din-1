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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product/create', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@show');
Route::delete('/product/{id}', 'ProductController@destroy');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::patch('/product/edit/{id}', 'ProductController@update');

Route::get('/categories', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/create', 'CategoryController@store');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::patch('/category/edit/{id}', 'CategoryController@update');
Route::delete('/category/{id}', 'CategoryController@destroy');
