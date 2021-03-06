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

//salary route are here
Route::get('salaries/advancesalary', 'SalaryController@addAdvanceSalary')->name('salaries.advancesalary');
Route::get('salaries/alladvancesalary', 'SalaryController@alladvancesalaries')->name('salaries.alladvancesalary');
Route::post('salaries/storeadvancesalary', 'SalaryController@storeadvancesalary')->name('salaries.storeadvancesalary');
Route::get('salaries/paysalary', 'SalaryController@paysalary')->name('salaries.paysalary');

Route::resource('categories','CategoryController');

//Products route are here
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/index', 'ProductController@index')->name('products.index');
Route::post('products/store', 'ProductController@store')->name('products.store');
Route::get('products/{id}/destroy', 'ProductController@destroy')->name('products.destroy');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::post('products/{id}/update', 'ProductController@update')->name('products.update');


 //Expense route are here
Route::get('expenses/create', 'ExpenseController@create')->name('expenses.create');
//Route::get('products/index', 'ProductController@index')->name('products.index');
Route::post('expenses/store', 'ExpenseController@store')->name('expenses.store');
Route::get('expenses/today', 'ExpenseController@today')->name('expenses.today');
Route::get('expenses/monthly', 'ExpenseController@monthly')->name('expenses.monthly');
Route::get('expenses/yearly', 'ExpenseController@yearly')->name('expenses.yearly');
Route::get('expenses/{id}/todayedit', 'ExpenseController@todayEdit')->name('expenses.todayedit');
Route::post('expenses/{id}/updatetoday', 'ExpenseController@updatetoday')->name('expenses.updatetoday');

//monthly expenses
Route::get('expenses/january', 'ExpenseController@january')->name('expenses.january');
Route::get('expenses/february', 'ExpenseController@february')->name('expenses.february');
Route::get('expenses/march', 'ExpenseController@march')->name('expenses.march');
Route::get('expenses/april', 'ExpenseController@april')->name('expenses.april');
Route::get('expenses/may', 'ExpenseController@may')->name('expenses.may');
Route::get('expenses/june', 'ExpenseController@june')->name('expenses.june');
Route::get('expenses/july', 'ExpenseController@july')->name('expenses.july');
Route::get('expenses/august', 'ExpenseController@august')->name('expenses.august');
Route::get('expenses/september', 'ExpenseController@september')->name('expenses.september');
Route::get('expenses/october', 'ExpenseController@october')->name('expenses.october');
Route::get('expenses/november', 'ExpenseController@november')->name('expenses.november');
Route::get('expenses/december', 'ExpenseController@december')->name('expenses.december');

//Attendence route are here
Route::get('attendences/take', 'AttendenceController@take')->name('attendences.take');
Route::post('attendences/takestore', 'AttendenceController@takestore')->name('attendences.takestore');
Route::get('attendences/all', 'AttendenceController@allAttendence')->name('attendences.all');
Route::get('attendences/{edit_date}/edit', 'AttendenceController@edit')->name('attendences.edit');
Route::post('attendences/updateattendence', 'AttendenceController@updateattendence')->name('attendences.updateattendence');
Route::get('attendences/{edit_date}/view', 'AttendenceController@view')->name('attendences.view');

//setting route are here

Route::get('setting', 'SettingController@setting')->name('setting');
Route::post('settings{id}', 'SettingController@update')->name('settings.update');


//excel import and export
Route::get('products/import', 'ProductController@importProduct')->name('products.import');
Route::get('export', 'ProductController@export')->name('export');
Route::post('import', 'ProductController@import')->name('import');