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

Route::get('/user','PagesController@user');
Route::get('/admin','PagesController@admin');
Route::get('/login','PagesController@login');
Route::get('/','PagesController@login');
Route::resource('members','MembersController');

Route::get('/addbooks',function(){
    return view('pages.admin.addbooks');
});
Route::get('/addmem', function()	 {
	return view('pages.admin.addmembers');
});
Route::get('/forms', function () {
    return view('pages.forms');
});
Route::get('/showmem',function(){
    return view('pages.admin.showmem');
});
