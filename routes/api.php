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

Route::get('employees','EmployeeController@getEmployee');
Route::get('employee/{id}','EmployeeController@getEmployeeById');
Route::post('addemployee','EmployeeController@addEmployee');
Route::put('updateemployee/{id}','EmployeeController@updateEmployee');
Route::delete('deleteemployee/{id}','EmployeeController@deleteEmployee');