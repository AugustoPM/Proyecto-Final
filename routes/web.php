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

Route::get('/faq','FrontFaqController@faq')->name('faq');
Route::get('/contact', 'FrontFaqController@contact')->name('contact');
Route::get('/welcome','FrontFaqController@welcome')->name('welcome');
Route::get('/admin','FrontFaqController@admin')->name('admin');
 //copiade Carrascal
Route::get('/product','FrontFaqController@Product')->name('product');  

Auth::routes();
//Copiado de Augusto
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');

//para que el admin pueda modificar
Route::resource('/faqs', 'FaqController', ['names' => [
    'index'=>'faqs',
    'create'=>'faq.create',
    'store'=>'faq.store',
    'edit'=>'faq.edit',
    'update'=>'faq.update',
    'destroy'=>'faq.destroy'

]]);
    