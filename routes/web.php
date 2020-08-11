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
// data show page
Route::get('/', 'PageController@homefun')->name('home');

Route::get('about', 'PageController@aboutfun')->name('aboutname');

Route::get('contact','PageController@contactfun')->name('contactname');
Route::get('samplepost','PageController@samplepostfun')->name('samplepostname');


