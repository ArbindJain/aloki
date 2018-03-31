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


/*
|--------------------------------------------------------
| Front-End Routes
|--------------------------------------------------------
*/
//start the app
Route::get('/', 'HomeController@index')->name('homepage');
//Ajax on bulk order submit
Route::post('/bulk-order', 'HomeController@bulkOrderSubmit')->name('bulkOrderSubmit');
//Ajax on Contact us submit
Route::post('/contact-us', 'HomeController@contactUsSubmit')->name('contactUsSubmit');


/*
|--------------------------------------------------------
| Back-End Routes
|--------------------------------------------------------
*/
Auth::routes();

Route::group(['namespace' => 'Admin'], function(){
	// Admin Home
	Route::get('/admin/dashboard', 'AdminHomeController@dashboard')->name('dashboard');
	// Bulk order display
	Route::get('/admin/bulk-order', 'AdminHomeController@bulkOrderData')->name('bulkOrderData');// Bulk order delete
	Route::delete('/admin/bulk-order/delete/{id}', 'AdminHomeController@bulkOrderDelete')->name('bulkOrder.destroy');
	// Contact us display
	Route::get('/admin/contact-us', 'AdminHomeController@contactUsData')->name('contactUsData');
	// Post CRUD
	Route::resource('/admin/product', 'ProductController');
});