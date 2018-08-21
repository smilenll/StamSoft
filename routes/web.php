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
Route::get('/admin', 'AdminController@getIndex');
//SEASONS
Route::resource('admin/seasons', 'SeasonController',['except' => ['create']]);
//LEAGUES
Route::resource('admin/leagues', 'LeagueController',['except' => ['create']]);
//TEAMS
Route::resource('admin/teams', 'TeamController',['except' => ['create']]);
//PLAYERS
Route::resource('admin/players', 'PLayerController',['except' => ['create']]);