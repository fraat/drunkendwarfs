@extends('base')

@section('content')
    <b>Ranking</b>
    <br>
    <br>
    <table>
        <tr>
            <th>Name</th>
            <th>Ranking</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->ranking }}</td>
            </tr>
        @endforeach
    </table>
@endsection
