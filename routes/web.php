<?php

Auth::routes();

Route::namespace('Admin')->name('admin.')->middleware(['auth'])->group(function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('user','UserController');
	Route::resource('customer','CustomerController');
	Route::resource('category','CategoryController');
	Route::resource('branch','BranchController');
	Route::resource('order','OrderController');
	Route::resource('offer','OfferController');
});
