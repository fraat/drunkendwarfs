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

Route::get('/aaa', function () {

    $game = \App\Models\Game::first();
    echo 'Player 1:' . $game->participant1_id;
    echo 'Player 2:' . $game->participant2_id;
    echo 'result:' . $game->result;

});

Route::get('/', function () {
    return view('welcome');
});
