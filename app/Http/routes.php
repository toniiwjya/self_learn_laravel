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

Route::get('/', function () {
    return view('halo');
});

Route::get('/halo', function()
{
    return 'halo';
});

Route::get('/halo-juga', 'SiteController@haloJuga');


Route::get('/profile', 'ProfilController@index');

Route::get('/materi', 'MateriController@show');

Route::get('/materi/{id}', 'MateriController@single');

Route::get('/login','LoginController@login');

Route::get('login', 'LoginController@formsederhana');
 
Route::post('login', 'LoginController@postformsederhana');
