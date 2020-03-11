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

Route::get('/blog', 'BlogController@index')->middleware('auth');

Route::get('/blog/article/{id}', 'BlogController@redirectToBlog')->middleware('auth');



Route::auth();
// Authentication routes...
Route::get('/auth/login', 'Auth\LoginController@getLogin');
Route::post('/auth/login', 'Auth\LoginController@Login');
Route::get('/auth/logout', 'Auth\LoginController@getLogout');
Route::get('/auth/confirm/{token}', 'Auth\LoginController@getConfirm');

// Resend routes...
Route::get('auth/resend', 'Auth\LoginController@getResend');

// Registration routes...
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');





