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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/product-list/{id}', 'HomeController@products')->name('products.list');

Route::resource('categories','CategoryController');
Route::resource('subcategories','SubCategoryController');
Route::resource('products','ProductController');

Route::post('/subcategorieslist', 'SubCategoryController@list')->name('subcategories.list');