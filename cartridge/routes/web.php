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
    return view('index');
});

Route::get('resume',[
	'as' => 'resume',
	'uses' => 'RedirectionLinks@pleaseRedirect'
]);

Route::get('home',[
	'as' => 'home',
	'uses' => 'RedirectionLinks@redirectHome'
]);

Route::get('devprofile',[
	'as' => 'devprofile',
	'uses' => 'RedirectionLinks@devProfile'
]);

Route::get('devstory',[
	'as' => 'devstory',
	'uses' => 'RedirectionLinks@devStory'
]);