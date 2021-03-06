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

// Torrents
Route::get('/torrents', 'TorrentController@index');
Route::get('/torrents/{torrent}', 'TorrentController@show');

// Groups
Route::get('/groups', 'GroupController@index');
Route::get('/groups/{group}', 'GroupController@show');
