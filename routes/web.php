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
    return view('welcome');
});

//Sessions
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/feed', 'FeedController@index')->name('feed');

// Shots
Route::get('shots/upload', 'ShotController@upload')->name('shots.upload');
Route::post('shots/upload', 'ShotController@store')->name('shots.store');
Route::post('shots/uploadimage', 'ShotController@storeImage')->name('shots.storeimage');
