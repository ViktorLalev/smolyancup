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

Route::get('/', function () {
    
	$teams= \App\Team::all();
	return view('welcome',compact('teams'));
    
});
Route::get('/contacts', function(){
	return view('contacts');
});
Route::resource('/teams', 'TeamsController');
Route::get('/groups/{group}', 'TeamsController@showByGroup');
Route::resource('/schedule/{group?}', 'ScheduleController@generateScheduleByGroup');