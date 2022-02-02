<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show(Game $game){
        return view('game', ['game' => $game]);
    }


    public function ranking(){
        $users = User::all();
        foreach ($users as $user){
            $user->ranking = $user->ranking();
        }
        $users = $users->sort(function ($a, $b) {
            return $a->ranking > $b->ranking;
        });
        $users = collect($users);
        return view('ranking', ['users' => $users]);
    }
}
