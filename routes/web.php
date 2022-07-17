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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::view('/contact', 'pages.contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/contact', 'ContactController@store')->name('contact');

Route::resource('posts', 'PostsController');
