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

Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/','FrontController@welcome')->name('welcome');
//Route::get('/admin','FrontController@admin')->name('admin');
 //copiade Carrascal
Route::get('/product','FrontController@Product')->name('product');  
//Copiado de Augusto
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/pricing', 'FrontController@pricing')->name('pricing');


Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('admin');

//para que el admin pueda modificar
Route::resource('/faqs', 'FaqController', ['names' => [
    'index'=>'faqs',
    'create'=>'faq.create',
    'store'=>'faq.store',
    'edit'=>'faq.edit',
    'update'=>'faq.update',
    'destroy'=>'faq.destroy'

]]);
    