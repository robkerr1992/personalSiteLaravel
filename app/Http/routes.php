<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::resource('contact', 'MessageController');
Route::get('/projects', 'HomeController@projects');
//Route::get('/contact', 'HomeController@contact');
Route::get('/message', 'HomeController@message');
Route::get('/blog', 'BlogController@index');
