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

// アクセスルート画面
Route::get('/', 'HomeController@index');

// 名簿一覧画面
Route::get('/roster/index', 'RosterController@index');
Route::get('/roster/group_search', 'RosterController@group_search');
Route::get('/roster/create', 'RosterController@create');
Route::get('/roster/createChk', 'RosterController@createChk');
Route::get('/roster/createExec', 'RosterController@createExec');
Route::get('/roster/edit', 'RosterController@edit');
Route::post('/roster/delete', 'RosterController@delete');

// グループ一覧画面
Route::get('/group/index', 'GroupController@index');
Route::get('/group/create', 'GroupController@create');
Route::post('/group/create', 'GroupController@createVali');
Route::post('/group/delete', 'GroupController@delete');
