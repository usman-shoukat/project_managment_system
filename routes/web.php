<?php

use Illuminate\Support\Facades\Route;

// ------------------------------welcome route--------------------------
Route::view('/', 'welcome');

// ------------------------------user route--------------------------
Auth::routes();
Route::view('/home', 'home')->middleware('auth');


// ------------------------------admin route--------------------------
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::get('/admin', 'AdminController@index');
Route::get('/client', 'ClientController@client')->name('client');
Route::get('/client/search', 'ClientController@clientsearch')->name('search');
Route::post('/client/store', 'ClientController@clientstore')->name('client.store');
Route::get('/client/{id}', 'ClientController@clientdel')->name('del.client');


// ------------------------------writer route--------------------------
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');
Route::view('/writer', 'writer');
