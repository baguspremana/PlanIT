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
    return view('landing.landing');
});

Route::get('/comming', function () {
    return view('comming-soon');
});

Route::get('/login', function () {
    return view('peserta.login');
});

Route::get('/signup-prog', function () {
    return view('peserta.sign-up-prog');
});

Route::get('/signup-web', function () {
    return view('peserta.sign-up-web');
});

Route::get('/signup-lcc', function () {
    return view('peserta.sign-up-lcc');
});

Route::get('/signup-si', function () {
    return view('peserta.sign-up-si');
});

Route::get('/signup-idea', function () {
    return view('peserta.sign-up-idea');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
<<<<<<< HEAD
});

=======
});
>>>>>>> 090d54dffeec451a5cdb8bfa2f3aa3189cbb4fa5
