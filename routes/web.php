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
    return view('welcome');
})->name('home');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/customers', function () {
    return view('customers');
})->name('customers');

Route::get('/ass-1', function () {
    return view('assignment-1');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post/all', 'PostsController@all');

Route::post('/post/store-post', 'PostsController@store');

Route::get('/post/{id}', 'PostsController@index');

