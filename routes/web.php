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

Route::redirect('/' , '/home' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{product}    ', 'HomeController@show')->name('products.show');

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/product/{product}/comments','CommentController@store');














Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function(){
    Route::resource('products', 'Admin\ProductController');
    Route::resource('categories', 'Admin\CategoriesController');


}

);
