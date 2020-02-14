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

//Webpages Routes
Route::get('/', 'WebsiteController@indexAction');

Route::get('/home', 'WebsiteController@indexAction');

Route::get('/contact', 'WebsiteController@contactAction');

Route::get('/plans', 'WebsiteController@plansAction');

Route::get('/about', 'WebsiteController@aboutAction');

Route::get('/tutorials', 'WebsiteController@tutorialsAction');

Route::get('/contact/form/{$request}', 'WebsiteController@contactFormAction');

// BLog routes
//TODO:midlleware authentification
Route::get('/blog', 'BlogController@index');

Route::get('/blog/article/{id}', 'BlogController@redirectToBlog');

Route::get('/blog/category/{id}', 'BlogController@redirectToCategory');

Route::get('/test', 'BlogController@getArticle');


