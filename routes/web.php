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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/finished', 'FinishedController@index')->name('finished');
Route::get('/profile_user', 'ProfileUserController@index')->name('profileu');
Route::get('/setting_user', 'SettingUserController@index')->name('settingu');


Route::get('/project', 'ProjectController@index');

Route::get('/finishedproject', 'FinishedProjectsController@index');

Route::get('/user', 'UserListController@index');


Route::get('/setting', 'SettingAdminController@index');

