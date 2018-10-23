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

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/signup', 'UserController@getSignup')->name('getsignup');
        Route::post('/signup', 'UserController@postSignup')->name('postsignup');
        Route::get('/signin', 'UserController@getSignin')->name('getsignin');
        Route::post('/signin', 'UserController@postSignin')->name('postsignin');
    });
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/logout', 'UserController@logOut')->name('getlogout');
        Route::get('/profile', 'UserController@getProfile')->name('getprofile');
    });
});
Route::get('/', 'ProductController@getIndex')->name('products.index');
Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');
Route::get('/checkout', 'ProductController@getCheckout')->name('getcheckout');
Route::post('/checkout', 'ProductController@postCheckout')->name('postcheckout');
