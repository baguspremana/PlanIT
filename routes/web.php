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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/comming', function () {
    return view('comming-soon');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('sign-up');
});

Route::get('/signprog', function () {
    return view('sign-up-prog');
});

Route::get('/signweb', function () {
    return view('sign-up-web');
});

Route::get('/signlcc', function () {
    return view('sign-up-lcc');
});

Route::get('/signsi', function () {
    return view('sign-up-si');
});

Route::get('/signidea', function () {
    return view('sign-up-idea');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
});