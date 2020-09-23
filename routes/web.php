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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Employees route are here
Route::get('employees/create', 'EmployeeController@create')->name('employees.create');
Route::get('employees/index', 'EmployeeController@index')->name('employees.index');
Route::post('employees/store', 'EmployeeController@store')->name('employees.store');
Route::get('employees/{id}/destroy', 'EmployeeController@destroy')->name('employees.destroy');
Route::get('employees/{id}/edit', 'EmployeeController@edit')->name('employees.edit');
Route::post('employees/{id}/update', 'EmployeeController@update')->name('employees.update');

//Customers route are here
Route::get('customers/create', 'CustomerController@create')->name('customers.create');
Route::get('customers/index', 'CustomerController@index')->name('customers.index');
Route::post('customers/store', 'CustomerController@store')->name('customers.store');
Route::get('customers/{id}/destroy', 'CustomerController@destroy')->name('customers.destroy');
Route::get('customers/{id}/edit', 'CustomerController@edit')->name('customers.edit');
Route::post('customers/{id}/update', 'CustomerController@update')->name('customers.update');

//Suppliers route are here
Route::get('suppliers/create', 'SupplierController@create')->name('suppliers.create');
Route::get('suppliers/index', 'SupplierController@index')->name('suppliers.index');
Route::post('suppliers/store', 'SupplierController@store')->name('suppliers.store');
Route::get('suppliers/{id}/destroy', 'SupplierController@destroy')->name('suppliers.destroy');
Route::get('suppliers/{id}/edit', 'SupplierController@edit')->name('suppliers.edit');
Route::post('suppliers/{id}/update', 'SupplierController@update')->name('suppliers.update');