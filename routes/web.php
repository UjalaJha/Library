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
Route::resource('books','BooksController');
Route::get('/addbooks',function(){
    return view('pages.admin.addbooks');
});

Route::get('/dummy','DummyController@blank');
Route::get('/blank','DummyController@blank');
Route::get('/flot','DummyController@flot');
Route::get('/buttons','DummyController@buttons');
Route::get('/forms','DummyController@forms');
Route::get('/grid','DummyController@grid');
Route::get('/icons','DummyController@icons');
Route::get('/index','DummyController@index');
Route::get('/loginsb','DummyController@loginsb');
Route::get('/morris','DummyController@morris');
Route::get('/notifications','DummyController@notifications');
Route::get('/panelswells','DummyController@panelswells');
Route::get('/tables','DummyController@tables');
Route::get('/typography','DummyController@typography');