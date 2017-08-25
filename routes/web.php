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

Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('services', function () {
    return view('services');
});
Route::get('/', function () {
    return view('index');
});


Auth::routes();


Route::post('/user/logout','UserController@userLogout')->name('user.logout');
Route::get('/user/profile','UserController@profile')->name('user.profile');
Route::get('/user','UserController@index')->name('user.dashboard');

Route::get('/admin/login','Auth\AdminLoginController@index')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::post('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/admin/createAddress','AdminController@createAddress')->name('admin.createAddress');
Route::get('/admin/addState','AdminController@addState')->name('admin.addState');


Route::get('/admin','AdminController@index')->name('admin.dashboard');

Route::get('/awareness','AwarenessController@index')->name('awareness');

Route::post('/addCountries','AdminController@addCountries');