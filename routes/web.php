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

/*=========================================================================================
                                    LANDING ROUTE
=========================================================================================*/

Route::get('/', function () {
    return view('landing.landing');
});

Route::get('/comming', function () {
    return view('comming-soon');
});

Route::get('/faq', function () {
    return view('landing.faq');
});

Route::prefix('landing')->group(function(){
    Route::get('/pemrograman','LandingController@showPemrograman')->name('detail.prog');
    Route::get('/desainWeb','LandingController@showWeb')->name('detail.web');
    Route::get('/cerdasCermat','LandingController@showLcc')->name('detail.lcc');
    Route::get('/ideBisnis','LandingController@showIdea')->name('detail.idea');
    Route::get('/sistemInformasi','LandingController@showSi')->name('detail.si');
});

/*=========================================================================================
                                    PESERTA ROUTE
=========================================================================================*/
/* AUTH PESERTA */

Route::get('/login', 'Auth\GroupLoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\GroupLoginController@login');
Route::post('/logout', 'Auth\GroupLoginController@logout');

Route::prefix('daftar')->group(function(){
    Route::get('/pemrograman', 'Auth\GroupRegisterController@showProgRegistrationForm')->name('regis.prog');
    Route::get('/cerdascermat', 'Auth\GroupRegisterController@showLccRegistrationForm')->name('regis.lcc');
    Route::get('/desainweb', 'Auth\GroupRegisterController@showWebRegistrationForm')->name('regis.web');
    Route::get('/idebisnis', 'Auth\GroupRegisterController@showIdeaRegistrationForm')->name('regis.idea');
});

Route::post('/daftar', 'Auth\GroupRegisterController@register');

Route::resource('dashboard','DashboardController');
Route::get('/verifikasi','DashboardController@showVerificationForm');
Route::get('/upload','DashboardController@showUploadDataForm');
Route::get('/setting','DashboardController@showSettingForm');


/*=========================================================================================
                                    ADMIN ROUTE
=========================================================================================*/

Route::get('/verifikasiPeserta','AdminController@showFormPembayaran');

Route::get('/verifikasiAdmin','AdminController@showFormVerifikasi');

Route::get('/logUpload','AdminController@showFormLogUpload');

Route::get('/tambahPeserta','AdminController@showFormTambahPeserta');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/dashboard', 'AdminController@index')->name('admin.index');
    Route::get('/', 'AdminController@index')->name('admin.index');
});

/*=========================================================================================
                                    JURY ROUTE
=========================================================================================*/

Route::prefix('juri')->group(function(){
    Route::get('/login', 'Auth\JuryLoginController@showLoginForm')->name('jury.login');
    Route::post('/login', 'Auth\JuryLoginController@login')->name('jury.login');
    Route::post('/logout', 'Auth\JuryLoginController@logout')->name('jury.logout');
    Route::get('/dashboard', 'JuryController@index')->name('jury.index');
    Route::get('/', 'JuryController@index')->name('jury.index');
});

Route::get('/rekap-nilai','JuryController@showRekapNilai');

Route::resource('/form-nilai','ScoreListController');

Route::get('/rekap-nilai-detail','JuryController@showFormDetailRekap');

Route::resource('/pesan','ScoreReqController');