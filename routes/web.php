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



Route::get('/', 'WebsiteController@indexAction');
Route::get('/contact', 'WebsiteController@contactAction');


Route::group(['middleware' => 'ip'], function(){

    Route::get('salut', function (){
        return 'salut ';
    });
});

Route::get('a-propos', 'PageController@about');
