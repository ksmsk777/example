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
    return 2222222222;
});

Route::get('/post', 'PostController@index')->name('post.index');

Route::get('/stamina', 'StaminaController@index')->name('stamina.index');


Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/main', 'MainController@index')->name('main.index');

Route::get('/post/create', 'PostController@create')->name('post.create');

Route::post('/post/create', 'PostController@store')->name('post.store');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{post}', 'PostController@update')->name('post.update');
Route::delete('/post/{post}', 'PostController@destroy')->name('post.delete');

Route::get('/bikes', 'BikeController@index')->name('bikes.index');
Route::get('/bikes/{bike}', 'BikeController@show')->name('bike.show');
Route::post('/bikes/create', 'BikeController@store')->name('bike.store');
Route::get('/bike/create', 'BikeController@create')->name('bike.create');

Route::get('/bikes/{bike}/edit', 'BikeController@edit')->name('bike.edit');
Route::patch('/bike/{bike}', 'BikeController@update')->name('bike.update');
Route::delete('/bike/{bike}', 'BikeController@destroy')->name('bike.delete');


