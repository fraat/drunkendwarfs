<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/game/{game}', 'App\Http\Controllers\GameController@show')->name('game.show');
Route::get('/game/create', 'App\Http\Controllers\GameController@create')->name('game.create');
Route::post('/game', 'App\Http\Controllers\GameController@store')->name('game.store');

Route::get('/ranking', 'App\Http\Controllers\GameController@ranking')->name('game.ranking');

Route::get('/', function () {
    return view('welcome');
});
