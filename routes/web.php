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
	Route::get('/get-customer','ReportController@getCustomer')->name('report.customer');
	Route::get('/get-order','ReportController@getOrder')->name('report.order');
	Route::get('/get-item','ReportController@getItem')->name('report.item');
	Route::get('/get-extra','ReportController@getExtra')->name('report.extra');
	Route::get('/get-order-status','ReportController@getOrderStatus')->name('report.order-status');
	Route::get('/get-order-customer','ReportController@getOrderCustomer')->name('report.order-customer');
	Route::resource('role','RoleController');
});
