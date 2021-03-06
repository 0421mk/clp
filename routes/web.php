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

Auth::routes();

// main
Route::get('/', [
    'as' => 'main',
    'uses' => 'mainController@index'
])->name('home');

Route::get('/home', [
    'as' => 'home',
    'uses' => 'mainController@index'
])->name('home');

Route::get('/reserve', [
    'as' => 'reserve',
    'uses' => 'resController@index'
]);
