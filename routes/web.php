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

Route::get('/', function () {
    return view('Index');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/card', function(){
    return view('Photographer/Card');
});

Route::get('/profile/1', function () {
    return view('Photographer/Profile');
});

Route::get('/profile/2', function () {
    return view('Photographer/Profile1');
});

Route::get('getselect', 'SearchController@getSelect');

Route::post('getbysearch','PhotographerController@getPhotographerByDate');
