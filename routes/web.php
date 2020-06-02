<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::resource('savings', 'SavingController')->middleware(['auth', 'super-admin']);
Route::resource('installments', 'InstallmentController')->middleware(['auth', 'super-admin']);

Route::get('customers', 'CustomerController@index')->name('customers.index')->middleware(['auth']);
Route::get('customers/create', 'CustomerController@create')->name('customers.create')->middleware(['auth', 'super-admin']);
Route::post('customers', 'CustomerController@store')->name('customers.store')->middleware(['auth', 'super-admin']);
Route::get('customers/{customer}', 'CustomerController@show')->name('customers.show')->middleware(['auth']);
Route::get('customers/{customer}/edit', 'CustomerController@edit')->name('customers.edit')->middleware(['auth', 'super-admin']);
Route::put('customers/{customer}', 'CustomerController@update')->name('customers.update')->middleware(['auth', 'super-admin']);
Route::delete('customers/{customer}', 'CustomerController@destroy')->name('customers.destroy')->middleware(['auth', 'super-admin']);

Route::get('customers/{customer}/applications', 'CustomerController@application')->middleware('auth');
Route::get('customers/{customer}/savings', 'CustomerController@saving')->middleware('auth');
Route::get('customers/{customer}/installments', 'CustomerController@installment')->middleware('auth');

Route::put('applications/{application}/approve', 'ApplicationController@approve')->middleware(['auth', 'head-office']);
Route::put('applications/{application}/disapprove', 'ApplicationController@disapprove')->middleware(['auth', 'head-office']);

Route::prefix('ajax')->group(function () {
    Route::get('customers', 'AjaxController@customer')->middleware('auth');
});