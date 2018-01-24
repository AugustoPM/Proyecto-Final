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
//Rutas del front
Route::get('/','FrontController@welcome')->name('welcome');
Route::get('/pricing', 'FrontController@pricing')->name('pricing');
Route::get('/product','FrontController@Product')->name('product');  
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact', 'FrontController@contact')->name('contact');

//Rutas del Back
Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('admin');

//para que el admin pueda modificar
Route::resource('/admin/faqs', 'FaqController', ['names' => [
    'index'=>'faqs',
    'create'=>'faq.create',
    'store'=>'faq.store',
    'edit'=>'faq.edit',
    'update'=>'faq.update',
    'destroy'=>'faq.destroy'

]]);
 Route::resource('/admin/faq2s', 'Faq2Controller', ['names' => [
     'index'=>'faq2s',
     'create'=>'faq2.create',
     'store'=>'faq2.store',
     'edit'=>'faq2.edit',
     'update'=>'faq2.update',
     'destroy'=>'faq2.destroy'

 ]]);
 Route::resource('/admin/contact', 'ContactController', ['names' => [
    'index'=>'contacts',
    'create'=>'city.create',
    'store'=>'city.store',
    'edit'=>'city.edit',
    'update'=>'city.update',
    'destroy'=>'city.destroy'

]]);
Route::resource('/admin/portadas', 'PortadaController', ['names' => [
    'index'=>'portadas',
    'create'=>'title.create',
    'store'=>'title.store',
    'edit'=>'title.edit',
    'update'=>'title.update',
    'destroy'=>'title.destroy'

]]);
Route::resource('/admin/products', 'ProductController', ['names' => [
    'index'=>'products',
    'create'=>'product.create',
    'store'=>'product.store',
    'edit'=>'product.edit',
    'update'=>'product.update',
    'destroy'=>'product.destroy'

]]);
    