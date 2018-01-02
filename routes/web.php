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

Route::get('/user', function () {
    return view('pages.user.index_user');
});
Route::get('/admin', function () {
    return view('pages.admin.index_admin');
});

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/forms', function () {
    return view('pages.forms');
});