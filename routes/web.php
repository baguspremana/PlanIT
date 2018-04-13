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
    return view('peserta.dashboard');
});

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});

Route::get('/pemrograman', function () {
    return view('landing.prog');
});

Route::get('/desain-web', function () {
    return view('landing.web');
});

Route::get('/cerdas-cermat', function () {
    return view('landing.lcc');
});

Route::get('/idea', function () {
    return view('landing.idea');
});

Route::get('/sistem-informasi', function () {
    return view('landing.si');
});

Route::get('/faq', function () {
    return view('landing.faq');
});

Route::get('/admin-login', function () {
    return view('admin.login');
});

Route::get('/login-juri', function () {
    return view('jury.login');
});

Route::get('/dashboard-juri', function () {
    return view('jury.dashboard');
});

Route::get('/signup-juri', function () {
    return view('jury.signup');
});