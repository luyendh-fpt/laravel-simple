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


Route::resource('/admin/products', 'ProductController');
Route::resource('/admin/flowers', 'FlowerController');

Route::get('/admin/image', 'ImageUploadController@uploadView');
Route::post('/admin/image', 'ImageUploadController@handleUpload');

Route::get('/admin/account', 'DemoRelController@demo');
Route::get('/admin/account/show', 'DemoRelController@show');


