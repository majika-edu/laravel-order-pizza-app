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


Route::get('/', 'PizzaController@getIndex')->name('shop.index'); 

Route::get('/add-to-cart/{id}', 'PizzaController@getAddToCart')->name('pizza.addToCart'); 
Route::get('/shopping-cart', 'PizzaController@getCart')->name('pizza.shoppingCart'); 
Route::get('/reduce/{id}', 'PizzaController@getReduceByOne')->name('pizza.reduceByOne');
Route::get('/remove/{id}', 'PizzaController@getRemoveItem')->name('pizza.remove');

Route::get('/checkout', 'PizzaController@getCheckout')->name('checkout'); 
Route::post('/checkout', 'PizzaController@postCheckout')->name('checkout'); 

Route::group(['prefix'=>'user','middleware'=>['guest']], function() {
    Route::get('/signup', 'UserController@getSignup')->name('user.signup');  
    Route::post('/signup', 'UserController@postSignup')->name('user.signup'); 
    Route::get('/signin', 'UserController@getSignin')->name('user.signin');
    Route::post('/signin', 'UserController@postSignin')->name('user.signin');
});

Route::group(['prefix' => 'user', 'middleware'=>['auth']], function() {
    Route::get('/profile', 'UserController@getProfile')->name('user.profile');
    Route::get('/logout', 'UserController@getLogout')->name('user.logout');
});

