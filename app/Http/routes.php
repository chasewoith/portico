<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

// Route::get('new-account', 'AccountController@newaccount');
// Route::post('new-account', 'AccountController@storeuser');
// Route::get('my-account', 'AccountController@users');
// Route::get('my-account/{username}', 'AccountController@myaccount');

//Route::get('tasks', 'TasksController@index');

Route::get('dashboard', 'DashboardController@index');

Route::get('tickets', 'TicketController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
