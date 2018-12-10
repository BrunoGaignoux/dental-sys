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

Route::get('/', 'HomeController@index');

Route::resource('clinics', 'ClinicController');

Route::resource('dentists', 'DentistController');

Route::resource('patients', 'PatientController');

Route::resource('schedules', 'ScheduleController');

Route::resource('stocks', 'StockController');

Route::resource('userTypes', 'UserTypeController');

Route::resource('addresses', 'AddressController');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register auth routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('user/list', 'UserController@listUser')->name('access.users.index');
    Route::post('user/create', 'UserController@createUser')->name('access.users.store');
    Route::post('user/edit', 'UserController@editUser')->name('access.users.edit');
    Route::post('user/search', 'UserController@searchUser')->name('access.users.search');
    Route::post('user/erase/{id}', 'UserController@eraseUser');
    Route::post('editAccess', 'UserController@editAccess')->name('access.edit');
    Route::post('createRol', 'UserController@createRol')->name('access.roles.store');
    Route::post('permission/create', 'UserController@createPermission')->name('access.permissions.store');
    Route::post('permission/aggregate', 'UserController@aggregatePermission')->name('access.permissions.aggregate');
    Route::get('permission/erase/{idrol}/{idper}', 'UserController@erasePermission');
    Route::get('new/user', 'UserController@viewNewUser')->name('access.users.create');
    Route::get('edit/user/{id}', 'UserController@viewEditUser');
    Route::get('new/rol', 'UserController@viewNewRol')->name('access.roles.create');
    Route::get('new/permission', 'UserController@viewNewPermission')->name('access.permissions.create');
    Route::post('aggregate/rol', 'UserController@aggregateRol')->name('access.role.aggregate');
    Route::get('erase/rol/', 'UserController@eraseRol')->name('access.role.erase');
    Route::get('trash/rol/{idrol}', 'UserController@trashRol');
});


Route::resource('officials', 'OfficialController');

Route::resource('providers', 'ProviderController');

Route::resource('banks', 'BankController');