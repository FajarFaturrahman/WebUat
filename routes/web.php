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
    return view('admin.home');
});

Route::get('/home', 'HomeController@index');

Route::get('/project', 'ProjectController@index');

Route::get('/finishedproject', 'FinishedProjectsController@index');

Route::get('/user', 'UserListController@index');

Route::get('/setting', 'SettingAdminController@index');