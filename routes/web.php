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

	Route::get('/','users@index');

	Route::get('home', 'users@index');
	Route::get('sports','sports@index');
	Route::get('contacts','contacts@index');
    
    
	Route::get('detail', function () {
		return view('sports.detail');
	});

	Route::get('admin', function () {
		return view('admin.layout.mainlayout');
	});

		Route::get('admin/profile', function () {
		return view('admin.profile.index');
	});

