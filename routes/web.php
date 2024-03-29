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

//passes
Route::get("/passes", "PassController@Index");
Route::get("/passes/create", "PassController@Create");
Route::post("/passes/save", "PassController@Save"); 
Route::get('/dashboard','DashboardController@Index');


/***************************** Admin Routes ***********************************************/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::get('dashboard', [
        'uses' => 'DashboardController@index'
    ]);
    Route::get('visits', [
        'uses' => 'AppointmentsController@index'
    ]);
    Route::get('visitors', [
        'uses' => 'VisitorsController@index'
    ]);
    Route::get('visits/accept/{id}', [
        'uses' => 'AppointmentsController@accept'
    ]);
    Route::get('visits/delete/{id}', [
        'uses' => 'AppointmentsController@delete'
    ]);
    Route::get('visits/decline/{id}', [
        'uses' => 'AppointmentsController@decline'
    ]);
    
    Route::get('employees', [
        'uses' => 'EmployeesController@index'
    ]);
    Route::get('employees', [
        'uses' => 'EmployeesController@index'
    ]);

    Route::get('/employees/form',[
        'uses'=>'EmployeesController@form'
    ]);
    Route::post('/employees/save',[
       'uses'=> 'EmployeesController@save'
    ]);
    Route::get('/employees/edit/{id}',[
        'uses'=> 'EmployeesController@edit'
     ]);
    Route::post('/employees/update/{id}',[
        'uses'=> 'EmployeesController@update'
     ]);
     Route::get('employees/delete/{id}',[
        'uses'=> 'EmployeesController@delete'
     ]);
    
});