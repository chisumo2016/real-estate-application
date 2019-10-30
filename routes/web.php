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


//Route::get('/', function () {
//    return view('home');
//});
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('venues/{slug}/{id}', 'VenueController@show')->name('venues.show');
Route::get('event_type/{slug}', 'EventTypesController@index')->name('event_type');
Route::get('location/{slug}', 'LocationController@index')->name('location');
Route::get('search', 'SearchController@index')->name('search');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');
Route::get('/testme', 'HomeController@testMe');
