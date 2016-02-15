<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use Illuminate\Http\Request;

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// route to logout
Route::get('logout', array('uses' => 'HomeController@doLogout'));

/**
 * Show Task Dashboard
 */
Route::get('/', array('uses' => 'HomeController@showTasks'));


/**
 * Add New Task
 */
Route::post('/task', array('uses' => 'HomeController@createTask'));


/**
 * Delete Task
 */
Route::delete('/task/{id}', array('uses' => 'HomeController@deleteTask'));