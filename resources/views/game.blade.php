@extends('base')

@section('content')
    <b>Game result of game {{ $game->id }}</b>
    <br>
    <br>
    <table>
        <tr>
            <td>Participant 1</td>
            <td>{{ $game->participant1_id }}</td>
        </tr>
        <tr>
            <td>Participant 2</td>
            <td>{{ $game->participant2_id }}</td>
        </tr>
        <tr>
            <td>Result</td>
            <td>{{ $game->result }}</td>
        </tr>
    </table>
@endsection
