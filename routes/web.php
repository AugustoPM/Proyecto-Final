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

Route::get('/pricing','PricingController@pricing')->name('pricing');

/*Route::get('/', function () {
    return view('pricing');
});*/

Auth::routes();

//Copiado de Augusto
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/welcome','FrontFaqController@welcome')->name('welcome');