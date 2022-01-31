<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    const RESULT_PARTICIPANT1 = 'participant_1';
    const RESULT_PARTICIPANT2 = 'participant_2';
    const RESULT_DRAW = 'draw';
}
