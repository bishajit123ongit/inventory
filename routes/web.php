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