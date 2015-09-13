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
	return view('theme.index',compact('teams'));
    
});
Route::get('/terms', function(){
	return view('theme.terms');
});
Route::get('/contacts', function(){
	return view('theme.contacts');
});
Route::post('/contacts','PagesController@sendEmail');
Route::resource('/teams', 'TeamsController');
//Route::get('/groups/{group}', 'TeamsController@showByGroup');
Route::get('/schedule', function(){
	return view('theme.soon');
});
Route::resource('/schedule/{group?}', 'ScheduleController@generateScheduleByGroup');