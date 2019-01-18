<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('clinics', 'ClinicAPIController');

Route::resource('dentists', 'DentistAPIController');

Route::resource('patients', 'PatientAPIController');

Route::resource('schedules', 'ScheduleAPIController');

Route::resource('stocks', 'StockAPIController');

Route::resource('user_types', 'UserTypeAPIController');

Route::resource('addresses', 'AddressAPIController');

Route::resource('officials', 'OfficialAPIController');

Route::resource('providers', 'ProviderAPIController');

Route::resource('banks', 'BankAPIController');