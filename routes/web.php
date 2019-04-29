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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/users/{id}', 'HomeController@show')->name('users');
Route::delete('/users/{id}', 'HomeController@destroy')->name('users');
Route::get('/users/{id}/edit', 'HomeController@edit')->name('users');
Route::put('/users/{id}', 'HomeController@update')->name('users');



Route::resource('members', 'MembersController');
Route::resource('parties', 'PartiesController');
Route::resource('memberships', 'MembershipsController');
Route::resource('contributions', 'ContributionsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
