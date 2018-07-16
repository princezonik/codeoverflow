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

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
	]);

Route::group(['prefix' => 'auth'], function(){
	
	Route::get('register', [
		'as' => 'get_register',
		'uses' => 'Auth\RegisterController@showRegistrationForm'
	]);

	Route::post('register', [
		'as' => 'post_register',
		'uses' => 'Auth\RegisterController@register'
	]);

	Route::get('login', [
		'as' => 'get_login',
		'uses' => 'Auth\LoginController@showLoginForm'
	]);

	Route::post('login', [
		'as' => 'post_login',
		'uses' => 'Auth\LoginController@login'
	]);




});

Route::group(['prefix' => 'question'], function(){

	Route::get('post', [
		'as' => 'get_post',
		'uses' => 'ForumController@getPost'
	]);

	Route::post('post', [
		'as' => 'post_question',
		'uses' => 'ForumController@postQuestion'
	]);

	Route::get('{slug}', [
		'as' => 'view_post',
		'uses' => 'ForumController@viewPost'
	]);

});


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

