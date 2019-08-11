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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//visits
Route::get("/visits", "VisitsController@Index");
Route::get("/visits/create", "VisitsController@Create");
Route::post("/visits/save", "VisitsController@Save");

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::get('appointments', [
        'uses' => 'AppointmentsController@index'
    ]);
    Route::get('employees', [
        'uses' => 'EmployeesController@index'
    ]);
    });
    //passes
Route::get("/passes", "PassController@Index");
Route::get("/passes/create", "PassController@Create");
Route::post("/passes/save", "PassController@Save"); 
Route::get('/dashboard','DashboardController@Index');




