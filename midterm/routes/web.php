<?php

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

Route::get('/companies/all',  '\App\Http\Controllers\CompanyController@GetCompanies')->name('companies');
Route::post('/companies/save', '\App\Http\Controllers\CompanyController@CreateCompanies')->name('companies.save');
Route::post('/companies/update', '\App\Http\Controllers\CompanyController@UpdateCompany')->name('companies.update');
Route::post('/companies/delete', '\App\Http\Controllers\CompanyController@DeleteCompany')->name('companies.delete');
Route::get('/companies/{id}/edit', '\App\Http\Controllers\CompanyController@editCompany')->name('companies.edit');




Route::get('/employees/all',  '\App\Http\Controllers\EmployeeController@GetEmployees')->name('employees');
Route::post('/employees/save', '\App\Http\Controllers\EmployeeController@CreateEmployees')->name('employees.save');
Route::post('/employees/update', '\App\Http\Controllers\EmployeeController@UpdateEmployee')->name('employees.update');
Route::post('/employees/delete', '\App\Http\Controllers\EmployeeController@DeleteEmployee')->name('employees.delete');
Route::get('/employees/{id}/edit', '\App\Http\Controllers\EmployeeController@EditEmployee')->name('employees.edit');
