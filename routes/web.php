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
// client page route
Route::get('/client', 'ClientController@client')->name('client');
Route::get('/client/search', 'ClientController@clientsearch')->name('search');
Route::post('/client/store', 'ClientController@clientstore')->name('client.store');
Route::get('/client/{id}', 'ClientController@clientdel')->name('del.client');
// user/admin in one page route
Route::get('/users', 'AdminController@users')->name('user');
Route::get('/user/search', 'AdminController@usersearch')->name('user.search');
Route::post('/user/store', 'AdminController@userstore')->name('user.store');
Route::get('/user/del/{id}', 'AdminController@userdel')->name('del.user');
Route::get('/user/ban/{id}', 'AdminController@userban')->name('ban.user');
Route::get('/user/unban/{id}', 'AdminController@userunban')->name('unban.user');
Route::get('/user/update/{id}', 'AdminController@userupdate')->name('edit.user.page');
Route::post('/user/edit/{id}', 'AdminController@useredit')->name('edit.user');
Route::get('/admins', 'AdminController@admins')->name('admin');
Route::get('/admin/search', 'AdminController@adminsearch')->name('admin.search');
Route::post('/admin/store', 'AdminController@adminstore')->name('admin.store');
Route::get('/admin/del/{id}', 'AdminController@admindel')->name('del.admin');
Route::get('/admin/ban/{id}', 'AdminController@adminban')->name('ban.admin');
Route::get('/admin/unban/{id}', 'AdminController@adminunban')->name('unban.admin');
Route::get('/admin/update/{id}', 'AdminController@adminupdate')->name('edit.admin.page');
Route::post('/admin/edit/{id}', 'AdminController@adminedit')->name('edit.admin');
// setting page
Route::get('/setting', 'AdminController@setting')->name('setting');
Route::post('/settingstore', 'AdminController@settingstore')->name('setting.store');
// Theme Setting Route Model
Route::post('/themestore', 'AdminController@themestore')->name('theme.store');
// order page
Route::get('/order', 'AdminController@Order')->name('admin.Order');

// ------------------------------writer route--------------------------
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');
Route::view('/writer', 'writer');
