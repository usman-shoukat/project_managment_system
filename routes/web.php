<?php

use Illuminate\Support\Facades\Route;

// ------------------------------welcome route--------------------------
Route::get('/', 'SalesmanController@showwellcome');

// ------------------------------user route--------------------------
Auth::routes([
'register' => false,
]);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login/user', 'Auth\LoginController@userLogin')->name('login.user');
Route::get('Client/order/view/{id}', 'HomeController@view')->name('view.userorder');
Route::get('/Client/order/file/{id}', 'HomeController@orderfile')->name('uploadfile.clientorder');
Route::post('/Client/order/file/save/{id}', 'HomeController@orderfilesave')->name('uploadfile.clientsave');
Route::get('/Client/order/del/file/{id}', 'HomeController@orderfiledel')->name('del.clientorderfile');
Route::get('/Client/setting', 'HomeController@setting')->name('setting.clientsetting');
Route::post('/Client/edit/{id}', 'HomeController@edit')->name('edit.client');
Route::get('/Client/order', 'HomeController@Order')->name('clientOrder');
Route::get('/Client/create', 'HomeController@createorder')->name('create.clientOrder');
Route::post('/Client/create/order', 'HomeController@clientorder')->name('save.clientorder');
Route::get('/Client/order/search', 'HomeController@search')->name('clientordersearch');



// ------------------------------admin route--------------------------
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/super/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin.save.login');
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
Route::get('/user/setting', 'AdminController@usersetting')->name('setting.user');

Route::get('/setting', 'AdminController@setting')->name('setting');
Route::post('/settingstore', 'AdminController@settingstore')->name('setting.store');
// Theme Setting Route Model
Route::post('/themestore', 'AdminController@themestore')->name('theme.store');
// order page
Route::get('/order', 'AdminController@Order')->name('admin.Order');
Route::get('/create', 'AdminController@createorder')->name('create.Order');
Route::post('/create/order', 'OrderController@index')->name('save.order');
Route::get('/order/search', 'OrderController@search')->name('ordersearch');
Route::get('/order/del/{id}', 'OrderController@del')->name('del.order');
Route::get('/order/view/{id}', 'AdminController@view')->name('view.order');
Route::get('/order/clone/{id}', 'OrderController@clonesave')->name('clone.order');
Route::get('/order/file/{id}', 'AdminController@orderfile')->name('uploadfile.order');
Route::post('/order/file/save/{id}', 'AdminController@orderfilesave')->name('uploadfile.save');
Route::get('/order/del/file/{id}', 'AdminController@orderfiledel')->name('del.orderfile');

Route::get('/order/assign/{id}', 'AdminController@assignorder')->name('assign.order');
Route::post('/order/assign/save/{id}', 'OrderController@assignsaveorder')->name('assign.save');
Route::get('/order/assign', 'OrderController@assignsearch')->name('assignsearch');

Route::get('/order/edit/{id}', 'AdminController@editview')->name('editview.order');
Route::post('/order/save/{id}', 'AdminController@editsave')->name('editsave.order');

// ------------------------------writer route--------------------------
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');
Route::post('/login/writer', 'Auth\LoginController@writerLogin')->name('writer.save');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');
Route::get('/writer', 'WriterController@index')->name('writer');
Route::get('/assigned/order/{id}', 'WriterController@orderconfirm')->name('order.confirm');
