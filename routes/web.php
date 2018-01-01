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

Route::get('Contact', 'PagesController@getContact');
Route::get('SignUp', 'PagesController@getSignUp');
Route::get('LogIn', 'PagesController@getLogIn');
Route::get('About', 'PagesController@getAbout');
Route::get('Home', 'PagesController@getHome');

Route::get('/', 'PagesController@getIndex');

//Kitchen
Route::get('/kitchen', 'Kitchen@index');
Route::get('kitchen/create', 'Kitchen@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
