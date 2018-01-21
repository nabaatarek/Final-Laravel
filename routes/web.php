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
    return view('Welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/posts', function () {
    return view('posts');
});

Auth::routes();
Route::get('/homeController', 'HomeController@index')->name('homeController');
Route::get('/contact', 'TestController@contact');
Route::prefix('posts')->middleware('auth')->group(function () {
    Route::get('/', 'PostController@index');
    Route::get('/create','PostController@create');
    Route::get('/{post}', 'PostController@post');
    Route::post('/create', 'PostController@save');




});
Route::get('/create','PostController@create');
Route::get('/category', 'CategoryController@index')->middleware('auth');
Route::post('/category/create', 'CategoryController@save')->middleware('auth');
