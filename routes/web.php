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
    return view('index');
});


Route::get('requirement', function () {
    return view('Requirement.Requirement');
});

Route::get('register', function () {
    return view('Register.RegisterForm');
});

Route::get('login', function () {
    return view('Register.RegisterForm');
});

Route::get('/manage', function () {
    return view('Manage.Notification');
});

Route::post('register/employer', 'RegisterController@registerEmployer');

Route::post('register/jobSeeker', 'RegisterController@registerJobSeeker');
